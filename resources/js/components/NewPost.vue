<template>
	
	<div class="bg-white rounded-lg shadow w-full p-4">
		<div class ="flex justify-between items-center">
			<div class ="">
				<div class="w-8">
					<img src="/assets/image/trinh.png" alt="Proflie image" class ="w-8 h-8 object-cover rounded-full">
				</div> 
			</div>
			<div class="flex-1 mx-4">
				<input type="text" name="body" class ="w-full pl-2 h-8 bg-gray-200 focus:outline-none text-sm rounded-full" placeholder="Add to post">
			</div>
			<div class="">
				<button class="flex justify-center items-center rounded-full w-10 h-10 bg-gray-200">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 512 512" style="width: 16px; enable-background:new 0 0 512 512;" xml:space="preserve">
					<g>
						<g>
							<g>
								<path d="M464,0H48C21.49,0,0,21.49,0,48v416c0,26.51,21.49,48,48,48h416c26.51,0,48-21.49,48-48V48C512,21.49,490.51,0,464,0z
									 M480,313.44l-68.64-68.64c-6.241-6.204-16.319-6.204-22.56,0L304,329.44L203.36,228.8c-6.241-6.204-16.319-6.204-22.56,0
									L32,377.44V48c0-8.837,7.163-16,16-16h416c8.837,0,16,7.163,16,16V313.44z"/>
								<path d="M288,80c-35.346,0-64,28.654-64,64c0,35.346,28.654,64,64,64c35.346,0,64-28.654,64-64C352,108.654,323.346,80,288,80z
									 M288,176c-17.673,0-32-14.327-32-32s14.327-32,32-32c17.673,0,32,14.327,32,32S305.673,176,288,176z"/>
							</g>
						</g>
					</g>
					</svg>
				</button>
			</div>
		</div>
	</div>
	
</template>

<script>
	
	export default {
		name: 'NewPost'
	}

</script>

<style scoped></style>