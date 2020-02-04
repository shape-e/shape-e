<template >
       <div v-html="" class="chat-message" v-if="message">
        <div class="datos">
        <p class="p" v-text="message.message" v-html="message.message">{{ message.message }} </p>
        </div>
        <small>{{ message.user.name }}</small>
        
    </div>

</template>

<script>
export default {
    props: ['message']
}



</script>

<style lang="css">
    .p{
        width: 97%;
        
    margin-left: 10px;

          text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    word-wrap: normal;
    line-height: 1.5;

    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;

    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;

    }

    p#normal  {
  white-space: normal;
  }
   
pre{
    color:#ffffff;
    background: #171515;
    padding: 15px;
}

p#pre  {
  white-space: pre;
  }
   
p#nowrap  {
  white-space: nowrap;
  }
   
p#prewrap  {
  white-space: pre-wrap;
  }
   
p#preline  {
  white-space: pre-line;
  }

    .datos{
    display: flex;
    flex-direction: row;
    }

    .chat-message{
        padding: 1rem;
    }

    .chat-message > p{
        margin-bottom: .5rem;
    }

</style>