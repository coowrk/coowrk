@php
	$customer = json_decode($customer);
@endphp

<x-pdf.root>
	<section>
		<center>
			<h2>Maklervollmacht</h2>
		</center>
	</section>

	<section>
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data style="vertical-align: bottom;">
					<div>
						{{ $customer->first_name }}{{ $customer?->last_name }}
					</div>
					<div>
						{{ $customer->street }} {{ $customer->house_number }}
					</div>
					<div>
						{{ $customer->postalcode }} {{ $customer->city }}
					</div>
					<div class="text-xs">(nachstehend Auftraggeber genannt) </div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						<img
							src="{{ public_path('images/CL-Logo-Capital-Living-GmbH-smal_0.jpg') }}"
							style="width: 1024px"
						>
					</div>
					<div style="margin-top:64px">
						CL Capital Living GmbH
					</div>
					<div>
						Hattinger Str. 574
					</div>
					<div>
						44879 Bochum
					</div>
					<div class="text-xs">(nachstehend Versicherungsmakler genannt)</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>

	<section>
		<p>
			Der Auftraggeber bevollmächtigt den Versicherungsmakler und einen eventuellen Rechtsnachfolger zur Vertretung in
			sämtlichen Versicherungsangelegenheiten.
		</p>

		<p>
			Diese Maklervollmacht umfasst insbesondere
		</p>

		<ul style="list-style-position: inside; text-align:justify">
			<li class="text-xs">
				die uneingeschränkte aktive und passive Vertretung des Auftraggebers gegenüber den jeweiligen Versicherern,
				einschließlich der Abgabe und Entgegennahme aller die Versicherungsverträge betreffenden Willenserklärungen,
				Auskünfte, Informationen und Anzeigen. Insbesondere ist der Makler zur Entgegennahme sämtlichen Schriftverkehrs
				bevollmächtigt (Postempfangsvollmacht)
			</li>
			<li class="text-xs">
				die Kündigung bestehender und den Abschluss neuer Versicherungsverträge,
			</li>
			<li class="text-xs">
				die Geltendmachung der Versicherungsleistungen aus den von dem Versicherungsmakler vermittelten oder in die
				Betreuung übernommenen Versicherungsverhältnissen sowie die sonstige Mitwirkung bei der Schadenregulierung,
			</li>
			<li class="text-xs">
				die Erteilung von Untervollmachten an die VEMA eG, 95500 Heinersreuth sowie weitere Unternehmensverbünde/Pools,
				denen sich ein Versicherungsmakler anschließen kann.
			</li>
			<li class="text-xs">
				die Erteilung und Widerruf von Untervollmacht an einen anderen Versicherungsmakler oder Personen, die von
				Berufswegen zur Verschwiegenheit verpflichtet sind,
			</li>
			<li class="text-xs">
				die Einleitung und Begleitung von Beschwerden bei dem BaFin oder einer Ombudsstelle,
			</li>
			<li class="text-xs">
				die Erteilung und Widerruf von Einverständniserklärungen zur Einholung von Bonitätsauskünften, sowie die Anforderung
				von Selbstauskünften,
			</li>
			<li class="text-xs">
				die Erteilung und Widerruf von SEPA-Lastschriftmandaten,
			</li>
			<li class="text-xs">
				die Erteilung und Widerruf von Einwilligung zur Erhebung und Verwendung von Gesundheitsdaten, von
				Schweigepflichtentbindungserklärungen, sowie das Auskunftsbegehren über gespeicherte und verwendete Daten,
			</li>
			<li class="text-xs">
				die Entgegennahme oder den Verzicht hierauf der vom Versicherer vor Vertragsabschluss zu übergebenden Unterlagen
				(insb. Vertragsinformationen, Bedingungen).
			</li>
		</ul>
	</section>

	<section>
		<p>
			Der Versicherungsmakler ist von den Beschränkungen des § 181 BGB befreit. Es ist ihm mithin gestattet zwischen dem
			jeweiligen Versicherer und dem Vollmachtgeber durch Vertretung beider Parteien einen Versicherungsvertrag über eine
			vorläufige Deckung abzuschließen, soweit er hierzu vom Versicherer berechtigt ist.
		</p>

		<p>
			Die Vollmacht ist zeitlich nicht befristet, kann vom Auftraggeber aber jederzeit mit Wirkung für die Zukunft
			widerrufen werden.
		</p>
	</section>

	<section style="margin-top: 3rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data>
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Ort, Datum
					</div>
					<div
						class="text-xs"
						style="color:white"
					>
						placeholder
					</div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Unterschrift Auftraggeber
					</div>
					<div class="text-xs">ggf. Stempfel</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>

	<section style="margin-top:3rem">
		<x-pdf.table.base>
			<x-pdf.table.row>
				<x-pdf.table.data>
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Ort, Datum
					</div>
					<div
						class="text-xs"
						style="color:white"
					>
						placeholder
					</div>
				</x-pdf.table.data>

				<x-pdf.table.data style="text-align: right">
					<div>
						______________________________________
					</div>
					<div class="text-xs">
						Unterschrift(en) abweichende versicherte Person(en)
					</div>
					<div class="text-xs">abweichende(r) Beitragszahler usw.</div>
				</x-pdf.table.data>
			</x-pdf.table.row>
		</x-pdf.table.base>
	</section>
</x-pdf.root>
