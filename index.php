<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vue.js in PHP</title>
    <script src="js/vue.js"></script>
	<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
</head>
<body>
	<div id="app">
		 <p>{{ message }}</p>
	</div>


	<script>
		//Instantate VUe.js
 new Vue({
     el: "#app",
     data: {
        message: 'Hello Vue from PHP!'
     }
 });


//Template for Vue Router
 const Home = { template: '<div> Home page </div>' };
 const About = { template: '<div> About page </div>' };

//Declare Router
 const routes = [
 { path: '', component: Home },
 { path: '/about', component: About },
 { path: '*', component: Home }
];


//Router Instance and pass router array
 const router = new VueRouter({
 mode: 'history',
 routes: routes
 });


//Create Vue and provide router instance
  const app = new Vue({
 router: router
 }).$mount('#app');
</script>
</body>
</html>