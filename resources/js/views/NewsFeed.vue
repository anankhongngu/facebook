<template>
	
	<div class ="flex flex-col items-center py-4">
		<!-- <Sidebar />	 -->
		<NewPost />
		<p v-if="loading">Loading posts...</p>	
		<Post v-else v-for ="post in posts.data" :key="post.data.post_id" :post="post"/>
		<!-- <SidebarRight /> -->
	</div>

</template>

<script> 
	
	import NewPost from '../components/NewPost';
	import Post from '../components/Post';
	import Sidebar from '../components/Sidebar';
	import SidebarRight from '../components/SidebarRight';

	export default {
		name: 'NewsFeed',

		components: {
			NewPost,
			Post,
			// Sidebar,
			// SidebarRight,
		},

		data: () => {
			return {
				posts: [],
				loading: true,
			}
		},

		mounted() {
			// axios.get('/api/posts/' + this.$route.params.userId)
			axios.get('/api/posts/')
					.then(res => {
						this.posts = res.data;
						this.loading = false;
					})
					.catch( error => {
						console.log('Unable to fetch posts');
						this.loading = false;

					});
		},
	}

</script>

<style scoped></style>