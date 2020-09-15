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
		},

		mounted() {
			this.$store.dispatch('fetchAuthUser');
		},

		created() {
			this.$store.dispatch('setPageTitle', this.$route.meta.title);
		},

		watch: {
			$route(to, from) {
				this.$store.dispatch('setPageTitle', to.meta.title);
			}
		}
	}

</script>

<style scoped>
	
</style>