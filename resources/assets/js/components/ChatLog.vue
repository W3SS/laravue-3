<template lang="html">
  <div class="chat-log">
      <chat-msg v-for="message in messages" :message="message"></chat-msg>
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
</style>
