@php
	use App\Components\Enums\User\SalutationEnum;
	use App\Components\Enums\ShortLetter\WeAskForOptionsEnum;
	use App\Components\Enums\ShortLetter\YouReceiveThisProcessOptionsEnum;
	use Illuminate\Support\Arr;

	$short_letter = json_decode($data);
	$customer = $short_letter->customer;
	$user = $short_letter->user;
@endphp

<x-pdf.root>
	<section>
		<div style="text-align: right">
			<img
				src="{{ resource_path('img/signal-iduna.png') }}"
				style="height: 3rem"
			/>
		</div>
	</section>

	<section style="margin-top: 1rem">
		<table style="width: 100%; border-collapse: collapse">
			<tr>
				<td>
					<div style="font-size: 0.75rem; line-height: 1">
						Bezirksdirektion Caykara * Mülheimer Str. 100 * 47057 Duisburg
					</div>
					<br>
					<div style="font-size: 0.875rem;">{{ SalutationEnum::from($customer->salutation)->getLabel() }}
					</div>
					<div style="font-size: 0.875rem;">{{ $customer->first_name }} {{ $customer->last_name }} </div>
					<div style="font-size: 0.875rem;">{{ $customer->street }} {{ $customer->house_number }}</div>
					<div style="font-size: 0.875rem;">{{ $customer->postalcode }} {{ $customer->city }}</div>
				</td>

				<td style="text-align: right">
					<div style="font-size: 0.875rem;">Bezirksdirektion</div>
					<div style="font-size: 0.875rem;">Cihan Volkan Caykara</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Mülheimer Str. 100</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">47057 Duisburg</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Öffnungszeiten von:</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Mo. - Do. von 09:00 bis 16:00 Uhr</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Fr. von 09:00 bis 14:00 Uhr</div>
					<br>
					<div style="font-size: 0.875rem;">Es schreibt Ihnen:</div>
					<div style="font-size: 0.875rem;">{{ $user->name }}</div>
					<div style="font-size: 0.875rem;">Auszubildender</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">E-Mail: nail.ucdu@signal-iduna.net
					</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Telefon: 0203 - 93025931</div>
					<div style="font-size: 0.75rem; line-height: 1rem; color: rgb(107 114 128)">Fax: 0203 - 93025932</div>
				</td>
			</tr>
		</table>
	</section>

	<section style="margin-top: 2rem">
		<div style="text-align: right; font-size: 0.875rem;">
			{{ Carbon\Carbon::parse($short_letter->sent_at)->translatedFormat('d. F Y') }}
		</div>
	</section>

	<section style="margin-top: 3rem">
		<div style="font-size: 0.875rem;font-weight: bold">
			{{ $short_letter->title }}
		</div>
	</section>

	<section style="margin-top: 2rem">
		<div style="font-size: 0.875rem;">
			{{ $short_letter->description }}
		</div>
	</section>

	<section style="margin-top: 1rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data style="width: 66%">
					@foreach (WeAskForOptionsEnum::cases() as $we_ask_for)
						<div style="margin-bottom: .5rem;position: relative;">
							<div
								style="height: 0.875rem; width: 0.875rem; position: relative; border-radius:0.25rem; border: 1px solid rgb(107 114 128); display:inline-block"
							>
								<div style="position: absolute; font-size: 0.5rem; top:0;">
									@if (in_array($we_ask_for->value, $short_letter->we_ask_for_options))
										x
									@endif
								</div>
							</div>
							<span style="font-size: 0.875rem; position: absolute;">{{ $we_ask_for->getLabel() }}</span>
						</div>
					@endforeach
				</x-pdf.table.data>

				<x-pdf.table.data>
					<ul style="list-style-type: none; padding:0">
						@foreach (YouReceiveThisProcessOptionsEnum::cases() as $you_receive_this_process)
							<div style="margin-bottom: .5rem">
								<div
									style="height: 0.875rem; width: 0.875rem; font-size: 0.5rem; border-radius:0.25rem; border: 1px solid rgb(107 114 128); display:inline-block"
								>
									@if (in_array($you_receive_this_process->value, $short_letter->you_receive_this_process_options))
										x
									@endif
								</div>
								<div style="font-size: 0.875rem;display:inline-block">{{ $you_receive_this_process->getLabel() }}</div>
							</div>
						@endforeach
					</ul>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>

	<section style="margin-top: 2rem">
		<div style="font-size: 0.875rem;">
			Mit freundlichen Grüßen
		</div>
	</section>
</x-pdf.root>
