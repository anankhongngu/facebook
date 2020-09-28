<template>
	<div class="flex justify-center">
		<!-- <div class="w-14"></div> -->
		<Sidebar />	
		<div class ="flex flex-col w-2/4 items-center py-4 sm:w-5/6">
			
			<NewPost />
			<p v-if="loading">Loading posts...</p>	
			<Post v-else v-for ="post in posts.data" :key="post.data.post_id" :post="post"/>
			
		</div>
	<SidebarRight />
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
			Sidebar,
			SidebarRight,
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