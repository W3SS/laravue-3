<template lang="html">
  <div class="chat-log">
      <chat-msg v-for="message in messages" :message="message"></chat-msg>
      <div class="empty" v-show="messages.length === 0">目前尚無任何訊息</div>
  </div>
</template>

<script>
export default {
    props:['messages']
}
</script>

<style lang="css">
.chat-log .chat-msg:nth-child(even){
    background-color: #ccc;
}
.empty{
    padding: 1rem;
    text-align: center;
}
</style>
