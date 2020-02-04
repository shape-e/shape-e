<template>
     <div class="chat-composer">
        <div class="barra-btn"> 
            <div class="br">
                 <button class="btn btn-primary" id="code" name="code"><img width="17px" src="https://img.icons8.com/material-outlined/24/ffffff/source-code.png"></button>
                 <button class="btn btn-primary"  id="lista" name="lista"><img width="17px" src="https://png.icons8.com/material/50/ffffff/list.png"></button>
                 <button class="btn btn-primary"  id="img" name="img"><img width="17px" src="https://img.icons8.com/wired/64/ffffff/picture.png"></button>

            </div>
            
            <textarea rows='1' id="mensaje"  placeholder="Que nos quieres compartir" v-model="messageText" > </textarea>
        </div>
        <button id="btn" class="btn btn-primary" @click="sendMessage" >Enviar</button>
    </div>    

</template>

<script>
    $(document).ready(function() {
        //agregar codigo
        $(":button#code").click(function(){
            $("#mensaje").val($('#mensaje').val()+'´´ Insertar Codiogo ¨'); 
        });

        $(":button#lista").click(function(){
            $("#mensaje").val($('#mensaje').val()+'- List item'); 
        });

        $(":button#img").click(function(){
            $("#mensaje").val($('#mensaje').val()+'°URL°°'); 
        });

        
    });
 
    

    function nl2br(str) {
    return (str + '').replace(/([^>rn]?)(rn|nr|r|n|)(%0D%0A)/g, '' + '<br>' + '');
    }

    function code(str) {
    return (str).replace(/´´/g,  '<pre><code>');
    }

    function codec(str) {
    return (str).replace(/¨/g,  '</pre></code>');
    }

    function img(str) {
    return (str).replace(/°/g,  '<img width="100%" class="lazyLoad"  data-src="');
    }

    function imgc(str) {
    return (str).replace(/°°/g,  '">');
    }


    

    function html(str) {
    return (str).replace(/</g,  '&lt;');
    }

    function htmlc(str) {
    return (str).replace(/>/g,  '&gt;');
    }

    var direcion = window.location.pathname.split( '/' );   

export default {
    data() {

        return {
            messageText: ''
        }
    
    },
    methods:{
        sendMessage(){
            this.$emit('messagesent', {
                message: codec(code(img(imgc(html(htmlc(this.messageText)))))),
                url:direcion[4],
                user: {
                        name: $('.dropdown-toggle').text()
                    }

                });
            this.messageText = '';

        }
    }
}
</script>

<style lang="css">

    .chat-composer{
        display: flex;
        flex-direction:column;
    
    }

    .chat-composer textarea{
        flex: 1 auto;
    }

    .chat-composer button{
        border-radius: 0;
    }

    .barra-btn{
        display: flex;
        flex-direction:column;
        width: 100%;
        height: 100px;
    }

    .barra-btn button{
        width: 100px;
    }
    .br{
        background: #273b47;
        width: 100%;

    }

</style>