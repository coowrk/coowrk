<x-app>
	<flux:sidebar
		class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900"
		stashable
		sticky
	>
		<flux:sidebar.toggle
			class="lg:hidden"
			icon="x-mark"
		/>

		<flux:brand
			class="px-2 dark:hidden"
			href="#"
			logo="https://fluxui.dev/img/demo/logo.png"
			name="Acme Inc."
		/>
		<flux:brand
			class="hidden px-2 dark:flex"
			href="#"
			logo="https://fluxui.dev/img/demo/dark-mode-logo.png"
			name="Acme Inc."
		/>

		<flux:input
			as="button"
			icon="magnifying-glass"
			placeholder="Search..."
			variant="filled"
		/>

		<flux:navlist variant="outline">
			<flux:navlist.item
				current
				href="#"
				icon="home"
			>Home</flux:navlist.item>
			<flux:navlist.item
				badge="12"
				href="#"
				icon="inbox"
			>Inbox</flux:navlist.item>
			<flux:navlist.item
				href="#"
				icon="document-text"
			>Documents</flux:navlist.item>
			<flux:navlist.item
				href="#"
				icon="calendar"
			>Calendar</flux:navlist.item>

			<flux:navlist.group
				class="hidden lg:grid"
				expandable
				heading="Favorites"
			>
				<flux:navlist.item href="#">Marketing site</flux:navlist.item>
				<flux:navlist.item href="#">Android app</flux:navlist.item>
				<flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
			</flux:navlist.group>
		</flux:navlist>

		<flux:spacer />

		<flux:navlist variant="outline">
			<flux:navlist.item
				href="#"
				icon="cog-6-tooth"
			>Settings</flux:navlist.item>
			<flux:navlist.item
				href="#"
				icon="information-circle"
			>Help</flux:navlist.item>
		</flux:navlist>

		<flux:dropdown
			align="start"
			class="max-lg:hidden"
			position="top"
		>
			<flux:profile
				avatar="https://fluxui.dev/img/demo/user.png"
				name="Olivia Martin"
			/>

			<flux:menu>
				<flux:menu.radio.group>
					<flux:menu.radio checked>Olivia Martin</flux:menu.radio>
					<flux:menu.radio>Truly Delta</flux:menu.radio>
				</flux:menu.radio.group>

				<flux:menu.separator />

				<flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
			</flux:menu>
		</flux:dropdown>
	</flux:sidebar>

	<flux:header class="lg:hidden">
		<flux:sidebar.toggle
			class="lg:hidden"
			icon="bars-2"
			inset="left"
		/>

		<flux:spacer />

		<flux:dropdown
			alignt="start"
			position="top"
		>
			<flux:profile avatar="https://fluxui.dev/img/demo/user.png" />

			<flux:menu>
				<flux:menu.radio.group>
					<flux:menu.radio checked>Olivia Martin</flux:menu.radio>
					<flux:menu.radio>Truly Delta</flux:menu.radio>
				</flux:menu.radio.group>

				<flux:menu.separator />

				<flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
			</flux:menu>
		</flux:dropdown>
	</flux:header>

	<flux:main>
		<flux:heading
			level="1"
			size="xl"
		>Good afternoon, Olivia</flux:heading>

		<flux:subheading
			class="mb-6"
			size="lg"
		>Here's what's new today</flux:subheading>

		<flux:separator variant="subtle" />

		{{ $slot }}
	</flux:main>
</x-app>
