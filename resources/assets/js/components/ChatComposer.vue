<template lang="html">
  <div class="chat-composer">
       <input type="text" placeholder="在此輸入你的訊息..." v-model="messageText" @keyup.enter="sendMessage">
       <button class="btn btn-primary" @click="sendMessage">送出</button>
  </div>
</template>

<script>
export default {
    data(){
        return {
            messageText:""
        }
    },
    methods:{
        sendMessage(){
            this.$emit('messagesent',{
                message:this.messageText,
                user:"AJ"
            });
            this.messageText="";
        }
    }
}
</script>

<style lang="css">
.chat-composer{
    display: flex;
}
.chat-composer input{
    flex: 1 auto;
}
.chat-composer button{
    border-radius: 0px;
}
</style>
