/*****************************************************************

		Copyright C �ٿ��׸� All rights reserved. 
		daontheme@daum.net
		�� �������� ���������� �ٿ��׸��� JS�Դϴ�. �ҹ������� ������ ������ ������ �� �ֽ��ϴ�. 
		���̼����� �������� ������. ���̼��� ������ �ҹ� ������� ���ֵ� �� �ֽ��ϴ�.

		�Ʒ� ������ ����/���� ���� ������.

******************************************************************/
function main_lnb(){
	TmenuTG = $('.lnb_wrap');
	Tmenu_H = $('.lnb_wrap').height();
	TmenuTG.find('> ul > li a').bind('mouseenter focus click',function(){
		sub_lnb(false);
	});
	TmenuTG.bind('mouseleave',function(){
		sub_lnb(true);
	});
	TmenuTG.find('> ul > li').bind('mouseenter mouseleave',function(event){
		if(event.type=='mouseenter'){
			if(!$(this).hasClass('current')){
				$(this).addClass('current');
			}
		}else{
			if(!$(this).hasClass('actived')){
				$(this).removeClass('current');
			}
		}
	});	
	TmenuTG.css({'height':60,'visibility':'visible'});
}

function sub_lnb(mode){
	if(mode==false){		
		TmenuTG.stop().animate({'height':Tmenu_H},900,'easeOutExpo');
		$("#header").addClass("header_on");
	}else{		
		TmenuTG.stop().animate({'height':60},900,'easeOutExpo');
		setTimeout(function() {
			$("#header").removeClass("header_on");
		}, 140);
	}
}

$(document).ready(function() {
	main_lnb();
});