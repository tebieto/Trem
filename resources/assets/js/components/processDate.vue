<template>
<div>
<h2>{{processed}}</h2>

</div>


</template>



<script>

export default {

mounted() {

var d= new Date(this.date)

var month= ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
this.processed= month[d.getMonth()] + ', ' + d.getFullYear();




},

data() {

return {

processed: ''


}


},

props: ['date'],









}


</script>