/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE Accordion Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.accordion', {  
        init : function(ed, url) {  
            ed.addButton('accordion', {  
                title : 'Add Accordion',  
                image : url+'/images/accordion.png',  
                onclick : function() {  
                     ed.selection.setContent('[accordion open="2"]<br />[accordion-item title="First Tab Title"]Your Text[/accordion-item]<br />[accordion-item title="Second Tab Title"]Your Text[/accordion-item]<br />[accordion-item title="Third Tab Title"]Your Text[/accordion-item]<br />[/accordion]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('accordion', tinymce.plugins.accordion);  
})();
