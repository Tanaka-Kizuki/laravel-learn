<template>
  <div>
    <p>{{msg}}</p>
    <hr>
    <input type="text" v-model="name">
    <button v-on:click="doAction">Click</button>
  </div>
</template>

<script>
export default {
  data:function() {
    return {
      msg:'please your name:',
      name:'',
    };
  },

  methods:{
    doAction:function() {
      this.msg = 'Hello, ' + this.name + '!!';
    }
  }
}
</script>