<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       
<script type="text/javascript" src="/js/vue.js"></script>
</head>
<body>
<div id="example-1">
    Hello @{{ name }}!
</div>
<div id="example-2">
<p v-if="show">@{{show}}</p>
</div>
<div id="example-3" v-if="show">
hahaha
</div>
</body>
</html>
<script>
var exampleData = {
    name: 'LaravelAcademy.org'
}

var exampleVM = new Vue({
    el: '#example-1',
    data: exampleData
})
		var showData = {
			show: false
}
var exampleVM1 = new Vue({
    el: '#example-2',
    data: showData,
})
		var Component = Vue.extend({});

var comp1 = new Component({
    el: '#example-3',
    data: showData,
})
</script>