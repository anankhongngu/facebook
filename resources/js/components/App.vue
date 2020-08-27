<template>

	<div class ="flex flex-col flex-1 h-screen overflow-y-hidden">
		<Nav />

		<div class ="flex overflow-y-hidden flex-1">
			<Sidebar />	
		
			<div class ="overflow-x-hidden w-2/4">
				<router-view></router-view>
			</div>

		<SidebarRight />

		</div>
	</div>
</template>

<script>

	import Nav from './Nav';
	import Sidebar from './Sidebar';
	import SidebarRight from './SidebarRight';
	
	export default {
		name: "App",

		components: {
			Nav,
			Sidebar,
			SidebarRight
		}
	}

</script>

<style scoped>
	
</style>