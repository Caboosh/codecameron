<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
<div class="flex">
    <div class="min-h-screen w-full max-w-xs flex bg-gray-100">
		<div class="flex w-full max-w-xs p-4 bg-white">
			<ul class="flex flex-col w-full">
				<li class="w-full my-px">
					<span class="flex font-medium text-sm text-gray-400 px-4 my-4 uppercase">Post Options</span>
				</li>
				<li class="w-full my-px">
					<a href="{{ route('admin.posts.index') }}"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100" :active="request()->routeIs('admin.posts.index')">
						<span class="flex items-center justify-center text-lg text-gray-400">
                            <svg fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="h-6 w-6">
                           <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                       </svg>
						</span>
                        <span class="ml-3">Posts</span>
                        <span class="flex items-center justify-center text-sm text-gray-500 font-semibold bg-gray-200 h-6 px-2 rounded-full ml-auto">{{ $postCount }}</span>
					</a>
				</li>
				<li class="w-full my-px">
					<a href="{{ route('admin.posts.trash') }}"
					   class="flex flex-row items-center h-12 px-4 rounded-lg text-gray-600 hover:bg-gray-100">
						<span class="flex items-center justify-center text-lg text-gray-400">
							<svg fill="none"
								 stroke-linecap="round"
								 stroke-linejoin="round"
								 stroke-width="2"
								 viewBox="0 0 24 24"
								 stroke="currentColor"
								 class="h-6 w-6">
								<path d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
							</svg>
						</span>
						<span class="ml-3">Trashed Posts</span>
					</a>
				</li>
			</ul>
		</div>
    </div>
    
    <div class="flex w-full overflow-hidden sm:rounded-lg">
        <div class="flex w-full py-12">
            <div class="w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white sm:rounded-lg p-12">
                    <div class="pull-left" style="padding-bottom: 40px;">
                        <a id="add-button" title="Add New" class="button-success" href="{{ route('admin.posts.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                    <div class="overflow-hidden">
                        <x-cms.posts :posts="$posts" :post-count="$postCount"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
