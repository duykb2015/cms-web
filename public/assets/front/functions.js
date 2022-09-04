// JavaScript Document
var delay_timeout= 600;
var timeout_ajax_fsearch_quick;
//---------
/***********************/
function validateFreeEmail(email)
{
  //var re = /\S+@\S+\.\S+/;
  var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (reg.test(email)){
		return true;
	}
	else{
		return false;
	}
}
function format_number( n, dp )
{
	var s = ''+(Math.floor(n)), d = n % 1, i = s.length, r = '';
	while ( (i -= 3) > 0 ) { r = ',' + s.substr(i, 3) + r; }
	return s.substr(0, i + 3) + r + (d ? '.' + Math.round(d * Math.pow(10, dp || 2)) : '');
}
function is_number( $num )
{
	return !isNaN(parseFloat( $num) ) && isFinite( $num);
}
function conver_number( str )
{
	var $num = str.replace(/\,/g, '');
	return $num ? $num : 0;
}
//---------------
function update_cartitem( data_post )
{
	if( data_post )
	{
		$.post( site_url + 'cart/update', data_post , function( _data){
		});
	}
}
function popup_confirm( $str )
{
	if( window.confirm( $str ) === true )
	{
		return true;
	}else{
		return false;
	}
}
//-----------
jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 10) {
		jQuery('.btnscroll').fadeIn();
	} else {
		jQuery('.btnscroll').fadeOut();
	}
});
function unicode(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
    str = str.replace(/đ/g,"d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    // Some system encode vietnamese combining accent as individual utf-8 characters
    // Một vài bộ encode coi các dấu mũ, dấu chữ như một kí tự riêng biệt nên thêm hai dòng này
    str = str.replace(/\u0300|\u0301|\u0303|\u0309|\u0323/g, ""); // ̀ ́ ̃ ̉ ̣  huyền, sắc, ngã, hỏi, nặng
    str = str.replace(/\u02C6|\u0306|\u031B/g, ""); // ˆ ̆ ̛  Â, Ê, Ă, Ơ, Ư
    // Remove extra spaces
    // Bỏ các khoảng trắng liền nhau
    str = str.replace(/ + /g," ");
    str = str.trim();
    // Remove punctuations
    // Bỏ dấu câu, kí tự đặc biệt
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    //console.log( str);
    return str;
}
function slug(string) {
	var string = unicode( string );
  return string
    .toString()
    .trim()
    .toLowerCase()
    .replace(/\s+/g, "-")
    .replace(/[^\w\-]+/g, "")
    .replace(/\-\-+/g, "-")
    .replace(/^-+/, "")
    .replace(/-+$/, "");
}
//-----------
function action_autoscroll( _box )
{
    var _ptop = 0;
    switch ( _box ) {
      case 'map':
      var _ptop = $('#google_maps').eq(0).offset().top;
        break;
      case 'contact':
        var _ptop = $('.footer__info').eq(0).offset().top - 30;
          break;
      default :
          return true;
    }
    jQuery('body,html').stop(false, false).animate({
      scrollTop: _ptop,
    }, 1200);
    return true;

}
function add_cartitem( data_post, _redirect )
{
	if( data_post )
	{
		$.post( site_url + 'cart/add', data_post , function( _data){
      if( _redirect !== false )
      {
          setTimeout(function(){ window.location.href = _redirect; }, 320);//1s

      }
      $('.cartitems_total').html(  _data + ' sản phẩm'  );
		});
	}
  //---------
}
function update_cart_action( $this, $is_cod )
{
  if( $this )
  {
    	var _val = $this.val();
    	var _val = is_number( _val ) ? _val : 1;
    	var _checkin = $this.data( 'checkin');
    	var _box_price = $('#cart_content .cartitem .price[data-checkin='+_checkin+']')
    	var _price = _box_price.data( 'price');
    	//--------------
    	//--------------

    	var data_update = { 'value':_checkin, 'qty': _val };
    	//update_cartitem( data_update );
    	//update amount
    	var price = _val * _price;
    	_box_price.html( format_number( price ) );
  }
  var _amount_total = 0
  var _amount_buyonline = 0
	//update amount total
	$('#cart_content .cartitem .price[data-price]').each(function(index, element) {

    var _price_item = $( element ).data( 'price');
    var _buy_online = $( element ).data( 'buyonline');
		var _checkin_item = $( element ).data( 'checkin');
		var _qty_item = $('#cart_content .cartitem .order-qty[data-checkin='+_checkin_item+']').val();

		_qty_item = is_number( _qty_item ) ? parseInt( _qty_item ) : 0;
    _price_item = is_number( _price_item ) ? parseInt( _price_item ) : 0;
    _buy_online = is_number( _buy_online ) ? parseInt( _buy_online ) : 0;
		//-------
		if( _price_item && _qty_item )
		{
      _amount_buyonline += _buy_online * _qty_item ;
      _amount_total += _price_item * _qty_item;

		}
		//alert( _qty_item);
	});
  //----------------
  _amount_total = $is_cod == true ? _amount_total - _amount_buyonline : _amount_total;
  //---------------
	$('.cart_amount_item').html( format_number( _amount_total ) );
  $('.cart_amount_total').html( format_number( _amount_total ) );
  //--------------------
  $('.cart_buyonline_plus ').html( '- ' + format_number( _amount_buyonline ) + ' đ' );
  $('.cart_buyonline_minus').html( format_number( _amount_buyonline )  + ' đ' );
  //-------------
	$('body .overlay').fadeOut( 'slow');
}
//-----------------
function is_delivery_cod( $val )
{
  const arr_cod = ["dnav_cdeliveryhome", "dnav_tccdeliveryhome", "payment-vimo", "dnav_ttdcpayment-vimo"];
  return arr_cod.includes( $val )
}
/***********************/
function check_show_btnremove()
{
  var checkin = $('.filterbox_container .rightbox__itemval.selected').length;
  if( checkin > 0 )
  {
    $( '.filterbox_container .rightbox__itemval_remove_group').fadeIn();
  }else{
    $( '.filterbox_container .rightbox__itemval_remove_group').fadeOut();
  }
}
/***********************/
function updateURL( _url_str ) {
  var newurl = current_url +'?'+ _url_str;
	//var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?data=' + _url_str ;
	window.history.pushState({path:newurl},'',newurl);
}
// function proitem__countdown()
// {
//   $('.proitem__countdown[data-countdown]').each(function() {
//       var $this = $(this), datetime_count = $(this).data('countdown');
//       var fiveSeconds = new Date().getTime() + ( datetime_count * 1000 );
//       //console.log( fiveSeconds );
//       $this.countdown(fiveSeconds, {elapse: true})
//       .on('update.countdown', function(event) {
//         var $this = $(this);
//         if (event.elapsed) {
//           //end
//           $this.hide();
//           $this.parent('.probox__des').removeClass('is-countdown').find('.probox__price').html( $(this).data( 'finish') );
//           //--------
//           var element_percent = $this.parents('.probox').find('.probox__img span.percent');
//           if( $('body').hasClass( 'prodetail') )
//           {
//             window.location.reload();
//           }
//           if( element_percent.length > 0 )
//           {
//               if( $this.data('percent') )
//               {
//                   element_percent.html( $this.data('percent') );
//               }else{
//                   element_percent.remove();
//               }
//           }
//           //console.log( 'end - ' + datetime_count + ' -- '+ new Date().getTime() );
//           $this.countdown( 'stop');
//         } else {
//           //before
//           //console.log( 'end - ' + datetime_count + ' -- '+ new Date().getTime() );
//           if( datetime_count > ( 60 * 60 *23 ) )
//           {
//             $this.html(event.strftime('<span class="d-none d-md-inline">Kết thúc: </span><b>%D ngày - %H:%M:%S</b>'));
//           }else{
//             $this.html(event.strftime('<span class="d-none d-md-inline">Kết thúc: </span><b>%H:%M:%S</b>'));
//           }
//         }
//       });
//       //--------------
//   });
// }
//------------------------
function getinfo_product_prolist( $proitem )
{
    var pro_img = $proitem['img'];
    var pro_title = $proitem['title'];
    var pro_price = $proitem['text'];
    var pro_color = $proitem['color'];
    var pro_option = $proitem['option'];
    //-----------
    var $html = '';
      $html += '<div class="modal_procare_proinfo row justify-content-center pb-3">';
          $html += '<figure class="col-6 col-sm-4 col-md-3 mb-2 mb-md-0 modal_procare_proinfo__img">';
            $html += '<img src="'+pro_img+'" class="img-thumbnail img-full">';
          $html += '</figure>';
            //---------
          $html += '<div class="col-12 col-sm-8 col-md-9 ps-0 modal_procare_proinfo__caption">';
              $html += '<p class="prodetail__title">'+pro_title+'</p>';
              //<span class="d-block mb-1 b500">Giá bán: </span>
              $html += pro_price ? '<div class="mb-2 prodetail__price">'+pro_price+'</div>' : '';
              if( pro_option || pro_color )
              {
                  $html += '<p class="mb-1">';
                    $html += pro_option ? '<b>Tuỳ chọn: </b>'+pro_option : '';
                    $html += pro_color  ? ( pro_option ? '&nbsp;&nbsp;-&nbsp;&nbsp;' : ' ') + '<b>Màu sắc: </b>'+pro_color : '';
                  $html += '</p>';
              }
          $html += '</div>';
      $html += '</div>';
    return $html;
}
//-----------------
function run_checkfid( $fid )
{
  console.log( 'checkfid: ' + $fid );
  if( $fid )
  {
    $.post( site_url + 'ajax/check-fid', { 'fid': $fid }, function( _resdata ){

        var resdata = $.parseJSON( _resdata );
        //console.log( resdata );
        if( resdata.status == 'true' )
        {
          window.location.href = resdata.redirect;
        }
    });
  }
}
//-----------------
$(document).ready(function(e) {


  $('.scrollToFixed').scrollToFixed({
      marginTop: $('#header .header__nav__container').outerHeight(true) + 15,
      limit: function() {
          var _checkend = $('.scrollToFixed_end').length > 0 ? $('.scrollToFixed_end').eq(0) : $('#footer') ;
          var limit = _checkend.offset().top - $(this).outerHeight(true);
          return limit;
      },
      zIndex: 99,
  });
  //---------------
  $('#owl_home').owlCarousel({
    autoplay: true,
    autoplayTimeout: 3500,
    smartSpeed: 900,
    //autoplaySpeed: 1200,
    margin: 0,
    items: 1,
    dots: true,
    loop: true,
    thumbs: false,
    nav: false,
    navText: [ 'prev', 'next' ],
  });
  //-------------
  $('#owl_pronavslide').owlCarousel({
    autoplay: false,
    autoplayTimeout: 3500,
    smartSpeed: 900,
    //autoplaySpeed: 1200,
    margin: 20,
    items: 2,
    thumbs: false,
    dots: true,
    loop: true,
    nav: false,
    navText: [ 'prev', 'next' ],
    responsive : {
        0 : {
            items: 1,
            margin: 0,
        },
        480 : {
            items: 1,
            margin: 0
        },
        768 : {
            items: 2,
            margin: 20,
        },
    }
  });
  //-------------
  $('#owl_proother, .owl_runjs_prosale').owlCarousel({
    autoplay: false,
    autoplayTimeout: 2800,
    smartSpeed: 420,
    margin: 0,
    items: 5,
    dots: false,
    loop: true,
    nav: true,
    thumbs: false,
    navText: [ '<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>' ],
    responsive : {
        0 : {
            items: 2,
        },
        480 : {
            items: 2,
        },
        768 : {
          items: 4,
        },
        991 : {
          items: 5,
        },
        1200 : {
          items: 5,
        }
    }
  });
  $('#owl_prosaleoff').owlCarousel({
    autoplay: true,
    autoplayTimeout: 3700,
    smartSpeed: 490,
    margin: 0,
    items: 5,
    thumbs: false,
    dots: false,
    loop: true,
    nav: true,
    navText: [ '<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>' ],
    responsive : {
        0 : {
            items: 2,
        },
        480 : {
            items: 2,
        },
        768 : {
          items: 4,
        },
        991 : {
          items: 5,
        },
        1200 : {
          items: 5,
        }
    }
  });
  //-------------
  $('.homebanner_ver__group').scrollToFixed({
      marginTop: 60,
      limit: 0,
      zIndex: 99,
  });
	//------------------
	$('#header .header__nav__container, #header .hlogo__container').sticky({topSpacing:0});
	//---------
	jQuery('#btn-scrolltop').click(function () {
		jQuery('body,html').stop(false, false).animate({
			scrollTop: 0
		}, 800);
		return false;
	});
  //--------------------
  $('.tradein__action_scrollto').on( 'click', function(){
      jQuery('body,html').stop(false, false).animate({
  			scrollTop: $('.tradein__textbox__container').eq(0).position().top - 150,
  		}, 300);
  		return false;
  });
  //------------------
  $('.serdetail__action_scrollto').on( 'click', function(){
      jQuery('body,html').stop(false, false).animate({
  			scrollTop: $('#serdetail_fcontact').eq(0).position().top - 150,
  		}, 300);
  		return false;
  });
  //------------------
  $('.prodetail__box__content').on( 'click', '.prodetail__box__content_action.runjs', function(){
      var _box = $(this).parents( '.prodetail__box__content');
      //console.log(_box);
      if( _box.hasClass('content-show') )
      {
        _box.removeClass( 'content-show');
      }else{
        _box.addClass( 'content-show');

      }
  })
	//------------------------
  $('.cart-btn-destroy').bind( 'click', function(){
      return popup_confirm( $(this).data( 'confirm') );
  });
  //------------------
	$('.action-addtocart').bind( 'click', function(){
    var addToCartBtn = $(this);
    var _reload = addToCartBtn.data( 'reload') != false ? site_url + 'cart' : false ;
    if( _reload )
    {
        var _value 	= {
    			'checkin'	: addToCartBtn.data( 'val'),
    			'qty'			: 1,
    		};
    }else{
      var _priceitem = $('.pdinfo_faddcart').find('[name=priceitem]:checked');
      _priceitem = _priceitem.length > 0 ? _priceitem.eq(0).val() : '';
      //-------------
      var _value 	= {
  			'checkin'	: $('[name=prodetail_checkin]').val(),
  			'qty'			: $('[name=prodetail_qty]').val(),
        'priceitem'	: _priceitem,

  		};
    }

    //----------
    addToCartBtn.addClass('is-added').find('path').eq(0).animate({
      'stroke-dashoffset':0
    }, 500, function(){
    setTimeout(function()
    {
      //addToCartBtn.removeClass('is-added');
      addToCartBtn.find('em').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
          addToCartBtn.find('path').eq(0).css('stroke-dashoffset', '19.79');
          animating =  false;
        });
        if( $('.no-csstransitions').length > 0 )
        {
          addToCartBtn.find('path').eq(0).css('stroke-dashoffset', '19.79');
          animating =  false;
        }
      }, 1200);

    });
    //console.log( _value, addToCartBtn.data( 'reload') );
    add_cartitem( _value, _reload );
		return false;
	});

	$('.pdinfo_faddcart').bind( 'submit', function(){
		//var _value 	= $(this).find('.prodetail__overview_info').serialize();//$(this).data( 'checkin');
    var _priceitem = $(this).find('[name=priceitem]:checked');
    _priceitem = _priceitem.length > 0 ? _priceitem.eq(0).val() : '';
    var _value 	= {
			'checkin'	: $(this).find('[name=prodetail_checkin]').val(),
			'qty'			: $(this).find('[name=prodetail_qty]').val(),
      'priceitem'	: _priceitem,
		};
    //----------
    //console.log( _value);
		add_cartitem( _value, site_url + 'cart' );
    //alert(1);
		return false;
	});
  //------------------------
   $('.pdinfo_faddcart__qty').on( 'click', 'button', function(){
       var _action = $(this).data( 'action');
       var _element = $('.pdinfo_faddcart__qty input[name=qty]').eq( 0);
       var _val = _element.val();
       _val = parseInt( _val );
       switch( _action )
       {
           case 'minus'  :
             _val -= 1;
             _val = _val > 0 ? _val : 1;
             _element.val( _val );
             break;
           case 'plus'  :
             _val += 1;
             _val = _val > 0 ? _val : 1;
             _element.val( _val );
             break;
       }
   });
 	$( '.order-qty').bind('change', function(){
 		var $this = $(this);
 		var _checkin_element = $(this).data( 'checkin');
 		var text_val = $(this).val();
 		//console.log( text_val );
 		$(this).delay(250).queue( function(){

 			if( $('body .overlay').length > 0 )
 			{
 				$('body .overlay').fadeIn( 'slow');
 			}else{
 				$('body').append('<div class="overlay"></div>');
 			}
 			//--------
 			var data_post = {};
 			data_post[ 'value' ] =  _checkin_element;
 			data_post[ 'qty' ] =  text_val;
 			$.post( site_url + 'cart/update-item', data_post, function(){
 				//window.location.reload();
 				update_cart_action( $this );
 			});
 			$(this).dequeue();
 		});

 	});
  //-----------------
  $( '.order-color').bind('change', function(){
 		var $this = $(this);
 		var _checkin_element = $(this).attr( 'name');
 		var text_val = $(this).val();
    var _qty = $('[name=qty_' + _checkin_element + ']').val();
 		//console.log( _checkin_element, text_val, _qty );
    /**/
    if( text_val )
    {
     		$(this).delay(250).queue( function(){

     			if( $('body .overlay').length > 0 )
     			{
     				$('body .overlay').fadeIn( 'slow');
     			}else{
     				$('body').append('<div class="overlay"></div>');
     			}
     			//--------
     			var data_post = {};
     			data_post[ 'value' ] =  _checkin_element;
          data_post[ 'procode' ] =  text_val;
     			data_post[ 'qty' ] =  _qty;

     			$.post( site_url + 'cart/update-item', data_post, function( _data ){
     				//window.location.reload();
            var resdata = $.parseJSON( _data );
            var cartitem = $('.cartitem_' + _checkin_element );
            //-------------
            cartitem.find( '.des-price span.price').html( resdata.percent_text );
            cartitem.find( '.price-amount').data( 'price', resdata.active );
            cartitem.find( '.price-amount').html( format_number( resdata.active ) );
            //console.log( resdata );
     				update_cart_action( $this );
     			});
     			$(this).dequeue();
     		});
      }else{
          alert( 'Vui lòng chọn màu sắc.');
      }

 	});
	//----------------
	$('.cartbtn_removeitem').bind('click', function(){
		var _text_confirm = $(this).data( 'confirm');
		if( window.confirm( _text_confirm ) === true )
		{
			var checkin = $(this).data('checkin');
			$.post( site_url + 'cart/remove', {'item': checkin}, function(){
				window.location.reload();
			});
			//return true;
		}else{
			return false;
		}
	});

  //------------------------
  //------------------------
  $('.header__action__fsearch input').on( 'keyup', function( e){
      var _val = $(this).val();
      if( _val.length > 0 )
      {
          clearTimeout(timeout_ajax_fsearch_quick);
          timeout_ajax_fsearch_quick = setTimeout( function(){
              //console.log( _val );
              $.post( site_url + 'ajax/search-quick', { 'key': _val }, function( _data ){
                $('.header__action__fsearch_quick').html( _data );
              })
          }, delay_timeout );
      }
  });
  //------------------
  //------------------
  check_show_btnremove();
  //------------------
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl,{
       boundary: 'window'
    })
  });
  //----------------------
  // proitem__countdown();
  //------------------
  //--------------
  $('body').on('click', '.prolit_btnquantam', function( event ){
      event.preventDefault();
      var $this = $(this);
      var _prourl = $this.data( 'product');
      var boxproduct = $this.parents( '.probox');
      var data_product = {
        'img'   :  boxproduct.find('.probox__img img').attr( 'src'),
        'title' :  boxproduct.find('.probox__title').text(),
        'text':  boxproduct.find('.probox__price').html(),//price
        'color':  '',
        'option':  '',
      };
      console.log( getinfo_product_prolist( data_product ) );
      //================
      var modal_procare_prolist = document.getElementById('modal_procare_prolist');
      modal_procare_prolist.addEventListener('show.bs.modal', function (event) {
        // do something...
          $('#modal_procare_prolist .modal_procare__product_container').html( getinfo_product_prolist( data_product) );
          $('#modal_procare_prolist button[type=submit]').val( _prourl );
      });
      var run_modal_procare_prolist = new bootstrap.Modal( modal_procare_prolist).show();

  })
  //--------------
  //============
  //-------------------
  $('#modal_procare_prolist form').on( 'submit', function( evt){
      event.preventDefault();
      var $this = $(this);
      var $btn = $this.find('button[type=submit]');//.button('loading');
      $this.find( '.is-invalid').removeClass( 'is-invalid');//remove class: input error
      $btn.addClass('disabled').attr( 'disabled', 'disabled');
      var _btn_val = $btn.attr( 'value');
      var form_data = $(this).serialize();
      /*
      for( const [ item_key, item_value] of Object.entries(prodetail_current) ) {
          form_data.push( { name: item_key, value: item_value } );
      };
      */
      var default_url_process = site_url + 'keo-thom-iphone/process-care/' + ( _btn_val ? _btn_val : '' );
      var tmp_url_process = typeof url_process_focus != 'undefined' ? url_process_focus + prodetail_current : default_url_process;
      url_process = tmp_url_process === false ? url_process : tmp_url_process
      console.log( url_process );
      //---------
      if( typeof url_process != 'undefined' )
      {
          $.post( url_process, form_data, function( $reponse){
            console.log( $reponse );
            var _reponse = $.parseJSON(  $reponse );
            if( _reponse.status == 'true' )
            {
              //alert( 'success');
              //console.log( _reponse.message );
              $('#modal_procare_prolist').addClass( 'success').find('form').html( _reponse.message );
              $('#modal_procare_prolist').trigger( 'reset');
              //pagetest_action_start( program_val );
            }else{
              //console.log( _reponse.error );
              $.each( _reponse.error, function( index, value){

                var _element = $this.find( '.ferror_'+index);
                var _element_input = $this.find( 'input[name='+index+']' );
                if( _element.length > 0  )
                {
                  _element_input.addClass( 'is-invalid');
                  _element.html( value ).show('slow');
                }else{
                  _element_input.removeClass( 'is-invalid');
                  _element.html( '').hide('fast');
                }

              });

            }
            $btn.removeClass( 'disabled').removeAttr( 'disabled');
          });
      }


      return false;
  });
  //===========================
    //------------------------
    $('.dcontent').on( 'click', 'a', function(){
      var _href = $(this).attr( 'href');
      var check_anchortext = $( '.dcontent').find( _href ).length > 0 ? true : false;
      if( check_anchortext )
      {
            var _focus_anchortext = $( '.dcontent').find( _href ).eq(0).offset().top;
            /**/
            console.log( _focus_anchortext );
            jQuery('body,html').stop(false, false).animate({
              scrollTop: _focus_anchortext - 80,
            }, 800);

            return false;
      }
    });
  //------------------
  //------------------
});
//---------------
$( document ).ajaxComplete(function( event,request, settings ) {
  // proitem__countdown();
});
