		//�Զ��庯��  ��ʾ���������˵�
		function navshow(pobj,cobj){
		
			pobj.hover(function(){
					pobj.css({"background":"#fff","border-left":"1px solid #bbb","border-right":"1px solid #bbb"});
					cobj.css("display","block");
				},function(){
					
					cobj.mouseover(function(){
						cobj.css("display","block");
						pobj.css({"background":"#fff","border-left":"1px solid #bbb","border-right":"1px solid #bbb"});
					});
			
					cobj.mouseout(function(){
						cobj.css("display","none");
						pobj.css({"background":"#f7f7f7","border":"1px solid #f7f7f7"});
					});
					
					pobj.css({"background":"#f7f7f7","border":"1px solid #f7f7f7"});
					cobj.css("display","none");
				});
		}

    /* #nav */
    $('.dt').mouseover(function(){
        $('.dd').show();
    })
    $('.dt').mouseout(function(){
        $('.dd').mouseover(function(){
            $(this).show();
        });
        $('.dd').hide();
    });
    $('.dd').mouseout(function(){
        $('.dd-list').mouseover(function(){
            $(this).show();
        });
        $(this).hide();
    });
    $('.dd-list').mouseover(function(){
        $('.dd-content').eq( $(this).index() ).stop(true, true).show();
        $(this).addClass('dd-active');
    })
    $('.dd-list').mouseout(function(){
        $('.dd-content').mouseover(function(){
            $('.dd').show();
            $(this).stop(true, true).show();
            $(this).siblings('.dd-list').addClass('dd-active');
        });
        $('.dd-content').eq( $(this).index() ).stop(true, true).hide();
        $(this).removeClass('dd-active');
    })
    $('.dd-content').mouseover(function(){
        $(this).stop(true, true).show();
        $(this).siblings('.dd-list').addClass('dd-active');
    });
    $('.dd-content').mouseout(function(){
        $(this).stop(true, true).hide();
        $('.dd-list').removeClass('dd-active');
    });
    //��ʾģ��
    function eleShow(showObj, addObj){
        showObj.show();
        addObj.addClass('active');
    }

    //����ģ��
    function eleHide(hideObj, remObj){
        hideObj.hide();
        remObj.removeClass('active');
    }
		
		//=================�ͻ�����=========================
			navshow($(".u-server"),$(".userserver"));
		
	
	    //=================��ַ����==========================
          navshow($(".url"),$(".url-nav"));
		
		//================�ҵľ���=======================	
			$("#myjd").hover(function(){
				$(".myjd-details").css("display","block");
			},function(){
				$(".myjd-details").css("display","none");
			
			});
			
		//================�ҵĹ��ﳵ=======================	
			$("#settleup").hover(function(){
				$(".mycar-details").css("display","block");
			},function(){
				$(".mycar-details").css("display","none");
			
			});