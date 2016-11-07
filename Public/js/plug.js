//mumu www.mumusj.com QQ:527576254


/* �����˶�����
 *  Obj �˶��Ķ���,���Դ�js��ȡ��element�������jquery��ȡ��Object����
 *  Target Ŀ��λ�ã�����
 *  Type �˶����ͣ�BUFFERΪ�����˶�(Ĭ��)��SPRINGΪ����+Ħ���˶�
 *  ���� Object.move(Obj,Target[,'Type']);
 */
(function($){
    $.fn.move = function(Obj,Target){
        Type = arguments[2]?arguments[2]:'BUFFER';//����TypeĬ��ֵΪBUFFER
        var iSpeed = 0;//�Զ����ٶ�
        var ele = '';
        var left = 0;//�ۼ��ٶȱ���
        
        if(Obj.style){
            ele = Obj;//�����js��ȡ�Ķ���
        } else {
            ele = Obj.get(0); //�����juqery��ȡ�Ķ���
        }
        //Type = if(Type)?Type:"BUFFER";alert(Type);
        switch(Type){
            case 'BUFFER':
                clearInterval(Obj.time);
                Obj.time = setInterval(function(){
                    var l = ele.offsetLeft;//��ȡ����λ�����
                    var iSpeed = (Target - l)/8;//��ʼ���ٶ�
                    iSpeed=iSpeed>0?Math.ceil(iSpeed):Math.floor(iSpeed);//�ٶ�ȡ��
                    if(l == Target){
                        clearInterval(Obj.time);//�ж϶���λ�ã���Ŀ�������˶�
                        ele.style.left = Target+"px";
                    } else {
                        ele.style.left = l+iSpeed+'px';//���ö���λ��
                    }
                },30)
                break;
            case 'SPRING':
                Obj.time = setInterval(function(){
                    var l = ele.offsetLeft;//��ȡ����λ�����
                    iSpeed += (Target - l)/5;//�ٶ�����
                    iSpeed*=0.7;
                    left+=iSpeed;
                    if(Math.abs(iSpeed)<1 && Math.abs(left-Target)<1){
                        clearInterval(Obj.time);//����ٶ��㹻С������Ŀ����㹻����ֹͣ�˶�
                        ele.style.left = Target+"px";
                    } else {
                        ele.style.left = l+iSpeed+"px";//���ö���λ��
                    }
                },30)
                break;
        }
        return $(this);
    }
})(jQuery);