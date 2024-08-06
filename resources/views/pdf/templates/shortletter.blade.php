<x-pdf.root>
	<style>
		.w-1/2 {
			width: 50%;
		}

		.w-1/3 {
			width: 33.333333%;
		}

		.w-2/3 {
			width: 66.666667%;
		}

		.text-sm {
			font-size: 0.875rem;
			line-height: 1.25rem;
		}

		.text-sm/4 {
			font-size: 0.875rem;
			line-height: 1rem;
		}

		.text-xs/4 {
			font-size: 0.75rem;
			line-height: 1rem;
		}

		.text-gray-500 {
			color: #6B7280;
		}

		.text-right {
			text-align: right;
		}

		.-mt-2 {
			margin-top: -8px;
		}

		.mt-2 {
			margin-top: 8px;
		}

		.mt-6 {
			margin-top: 24px;
		}

		.mt-24 {
			margin-top: 96px;
		}

		.w-full {
			width: 100%;
		}

		.border-collapse {
			border-collapse: collapse;
		}

		.h-4 {
			height: 16px;
		}

		.w-4 {
			width: 16px;
		}

		.h-8 {
			height: 32px;
		}

		.h-10 {
			height: 40px;
		}

		.h-12 {
			height: 48px;
		}

		.h-32 {
			height: 128px;
		}

		.relative {
			position: relative;
		}

		.absolute {
			position: absolute;
		}

		.py-2 {
			padding-top: 8px;
			padding-bottom: 8px
		}

		.py-4 {
			padding-top: 16px;
			padding-bottom: 16px
		}

		.py-8 {
			padding-top: 32px;
			padding-bottom: 32px
		}

		.size-12 {
			height: 48px;
			width: 48px;
		}

		.left-0 {
			left: 0;
		}

		.right-0 {
			right: 0;
		}

		.pl-20 {
			padding-left: 80px;
		}

		.pr-8 {
			padding-right: 32px;
		}

		.border {
			border-width: 1px;
			border-style: solid;
		}

		.border-gray-500 {
			border-color: rgb(107 114 128);
		}

		.rounded {
			border-radius: 12px;
		}

		.align-top {
			vertical-align: top;
		}

		.align-middle {
			vertical-align: middle;
		}
	</style>

	<table class="w-full border-collapse">
		<tr>
			<td>
				<div class="text-xs/4">Bezirksdirektion Caykara * Mülheimer Str. 100 * 47057 Duisburg</div>
				<br>
				<div>{{ $salutation }}</div>
				<div>{{ $first_name }} {{ $last_name }} </div>
				<div>{{ $street }} {{ $house_number }}</div>
				<div>{{ $postcode }} {{ $city }}</div>
			</td>
			<td class="text-right">
				<div>
					<img
						class="h-32"
						src="{{ resource_path('images/signal-iduna.png') }}"
					/>
				</div>

				<div class="mt-6">Bezirksdirektion</div>
				<div>Cihan Volkan Caykara</div>
				<div class="text-xs/4 text-gray-500">Mülheimer Str. 100</div>
				<div class="text-xs/4 text-gray-500">47057 Duisburg</div>
				<div class="text-xs/4 text-gray-500">Öffnungszeiten von:</div>
				<div class="text-xs/4 text-gray-500">Mo. - Do. von 09:00 bis 16:00 Uhr</div>
				<div class="text-xs/4 text-gray-500">Fr. von 09:00 bis 14:00 Uhr</div>
				<br>
				<div>Es schreibt Ihnen:</div>
				<div>Nail Ucdu</div>
				<div>Auszubildender</div>
				<div class="text-xs/4 text-gray-500">E-Mail: nail.ucdu@signal-iduna.net</div>
				<div class="text-xs/4 text-gray-500">Telefon: 0203 - 93025931</div>
				<div class="text-xs/4 text-gray-500">Fax: 0203 - 93025932</div>
			</td>
		</tr>
	</table>

	<div class="mt-24 text-right text-xs/4">
		04. August 2024
	</div>

	<div class="mt-24 font-bold">
		{{ $reason }}
	</div>

	<div class="mt-6">
		Zur Vereinfachung unseres Schriftverkehrs senden wir Ihnen diesen Kurzbrief.
	</div>

	<div class="mt-24">
		<table class="w-full border-collapse">
			<tr>
				<td class="w-2/3 align-top">
					<div class="font-medium">Wir bitten um</div>
					<table class="mt-6 w-full border-collapse">
						@foreach (json_decode($we_ask_for) as $key => $value)
							@if ($loop->index % 2 == 0)
								<tr>
							@endif
							<td class="relative w-1/2 py-8 pl-20">
								<div class="size-12 absolute left-0 rounded border border-gray-500">
									@if (in_array($key, json_decode($options)))
										<img
											class="h-12"
											src="{{ resource_path('images/x-icon.png') }}"
										/>
									@endif
								</div>
								<div class="-mt-2 text-sm/4">
									{{ $value }}
								</div>
							</td>
							@if ($loop->index % 2 != 0)
			</tr>
			@endif
			@endforeach
		</table>
		</td>
		<td class="relative w-1/3 text-right align-top">
			<div class="font-medium">Sie erhalten den Vorgang</div>

			<div class="relative mt-6 w-full">
				@foreach (json_decode($cause_for_letter) as $key => $value)
					<div class="relative py-8 pl-20">
						<div class="size-12 absolute left-0 rounded border border-gray-500">
							@if (in_array($key, json_decode($options)))
								<img
									class="h-12"
									src="{{ resource_path('images/icon.png') }}"
								/>
							@endif
						</div>
						<div class="-mt-2 text-sm/4">
							{{ $value }}
						</div>
					</div>
				@endforeach
			</div>
		</td>
		</tr>
		</table>
	</div>

	<div class="mt-24">
		Mit freundlichen Grüßen
	</div>
</x-pdf.root>
