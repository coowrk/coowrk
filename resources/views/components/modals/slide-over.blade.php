<div x-cloak
	x-data="{ show: @entangle('show') }">
	<div aria-labelledby="slide-over-title"
		aria-modal="true"
		class="relative z-10"
		role="dialog"
		x-show="$wire.show">
		<!-- Background backdrop, show/hide based on slide-over state. -->
		<div class="fixed inset-0 bg-zinc-950 bg-opacity-80"></div>

		<div class="fixed inset-0 overflow-hidden">
			<div class="absolute inset-0 overflow-hidden">
				<div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
					<!--
																Slide-over panel, show/hide based on slide-over state.
						
																Entering: "transform transition ease-in-out duration-500 sm:duration-700"
																		From: "translate-x-full"
																		To: "translate-x-0"
																Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
																		From: "translate-x-0"
																		To: "translate-x-full"
														-->
					<div class="pointer-events-auto w-screen max-w-2xl">
						<div class="flex h-full flex-col overflow-y-scroll bg-zinc-900 py-6 shadow-xl">
							<div class="px-4 sm:px-6">
								<div class="flex items-start justify-between">
									<h2 class="text-base font-semibold leading-6 text-zinc-900 dark:text-white"
										id="slide-over-title">Panel title</h2>
									<div class="ml-3 flex h-7 items-center">
										<button
											class="relative rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
											type="button">
											<span class="absolute -inset-2.5"></span>
											<span class="sr-only">Close panel</span>
											<svg aria-hidden="true"
												class="h-6 w-6"
												fill="none"
												stroke-width="1.5"
												stroke="currentColor"
												viewBox="0 0 24 24">
												<path d="M6 18L18 6M6 6l12 12"
													stroke-linecap="round"
													stroke-linejoin="round" />
											</svg>
										</button>
									</div>
								</div>
							</div>
							<div class="relative mt-6 flex-1 px-4 sm:px-6">
								<!-- Your content -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
