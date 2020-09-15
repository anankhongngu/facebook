<template>

	<div class="flex flex-col items-center ">
		<div class="relative mb-10 flex justify-center">
			<div class="w-full shadow-lg h-48 rounded-b-lg overflow-hidden z-10">
				 <img src="/assets/admin/background-profile.jpg" alt ="Background Profile" class="h-full rounded-b-lg object-cover w-full">
			</div>

			<div class="absolute flex flex-col justify-center items-center bottom-0 left-50 -mb-12 z-20">
				<div class="w-24">
					<img src="/assets/image/trinh.png" alt="Proflie image" 
			class="object-cover w-24 h-24 border-4 border-gray-200 rounded-full shadow-lg">
				</div>

				<div class="text-center">
					<p class="text-3xl font-semibold text-black">{{ user.data.attributes.name }}</p>
				</div>
			</div>
		</div>
		<p v-if="postLoading">Loading posts...</p>	
		<Post v-else v-for ="post in posts.data" :key="post.data.post_id" :post="post"/>
		
		<p v-if="! postLoading && posts.data.length < 1" class="mt-4">No posts found. Get started...</p>
	</div>
	
</template>

<script>

	import Post from '../../components/Post';

	export default {
		name: 'Show',

		data: () => {
			return {
				user: null,
				posts: null,
				userLoading: true,
				postLoading: true,
			}
		},


		components: {
			Post,
		},

		mounted() {
			axios.get('/api/users/' + this.$route.params.userId)
				.then( res => {
					this.user = res.data;
				})
				.catch( error => {
					console.log('Unable to fetch user form the server');

				})
				.finally(() => {
					this.userLoading = false;
				});

			axios.get('/api/users/' + this.$route.params.userId + '/posts')
				.then(res => {
					this.posts = res.data;
				})
				.catch( error => {
					console.log('Unable to fetch posts');

				})

				.finally(() => {
					this.postLoading = false;
				});
		}
	}	

</script>

<style scoped></style>