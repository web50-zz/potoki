import * as $ from "jquery";

$(function() {
   
    class lkModal {
        constructor(el) {
            this.button = el;
            this.parent = $('#'+this.button.attr('data-lk-modal'));
            this.form = this.parent.find('form');
            let f = this.parent;
            this.form_valid = false;
            this.button.on('click',function(){
                f.fadeIn();
                f.css('display','flex');
            })
            this.init();
        }
        init(){
            let obj = this;
            let el = this.button;
            let f = this.parent;
            el.on('click',function(){
                obj.get_values();
                f.fadeIn();
                f.css('display','flex');
            })
            let mc = f.find('.lk-modal__close-btn');
            $(mc).on('click',function(){
                let d = $(this).closest('.lk-modal__wrap');
                d.fadeOut();
            })
            let s = f.find('.lk-modal__submit');
            s.on('click',function(){
                obj.validate();
                if(obj.form_valid != true){
                    return;
                }
                let form = s.closest('form');
                let data = form.serialize();
                let url = form.attr('data-target');
                let modal = form.closest('.lk-modal__wrap');;
                let w = form.find('.lk-modal__msg');
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: function(response){
                        var res = $.parseJSON(response);
                        if(res.status == 'success'){
                            w.html(res.message);
                            //modal.hide();
                            obj.set_changes();
                            if(res.action){
                                if(res.action == 'close'){
                                    modal.hide();
                                }
                                if(res.action == 'redirect'){
                                    window.location.href = res.url;
                                }
                                
                            } 
                        }
                        if(res.status == 'error'){
                            w.html(res.message);
                            if(res.errors){
                                if(typeof res.errors == 'object'){
                                 let keys = Object.keys(res.errors);
                                 if(keys.length > 0){
                                    keys.forEach(function(v){
                                        if($(`[name=${v}`).length == 1){
                                            $(`[name=${v}`).parent().addClass('error');
                                        }
                                    })
                                 }
                                }
                            }
                        }
                        
                    },
                    error: function(){
                        w.html('Server side error');
                        
                        
                    }
                  });
            })
        }
        validate(){
            let flds = this.form.find(':input');
            let error = false;
            flds.each(function(){
                let el = $(this);
                if(el.hasClass('req') && el.val() == ''){
                    el.parent().addClass('error');
                    error = true;
                }else{
                    el.parent().removeClass('error');
                }
            })
            if(!error){
                this.form_valid = true;
                return;
            }
            this.form_valid = false;
        }
        set_changes(){
            const inputs = this.form.find('input');
            /*
            console.log('set changes');
            */
            inputs.each(function(){
                /*
                console.log('search');
                console.log($(this));
                console.log($(this).val());
                console.log($(this).attr('data-source'))
                console.log('via data');
                console.log($(this).data('source'))
                console.log('via js');
                console.log($(this)[ 0 ].dataset.source);
                */
                let source = $(this).attr('data-source');
                if(source){
                    /*
                    console.log('found');
                    */
                    if($(`#${source}`).length ==1){
                        $(`#${source}`).html($(this).val());
                    }

                }
            })
        }
        get_values(){
            const inputs = this.form.find('input');
            inputs.each(function(){
                let source = $(this).attr('data-source');
                
                if(source){
                    if($(`#${source}`).length ==1){
                        $(this).val($(`#${source}`).html());
                    }

                }
            })
        }
    }

    $('.lk-modal-show').each(function(){
        let el = $(this);
        new lkModal(el);
   })
 });

    