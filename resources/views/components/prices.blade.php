<section class="section">
    <div class="container">
      <span class="prefix">
        {{ $data['prefix'] }}
      </span>
      <h2 class="headline">
        {!!$data['title'] !!}
      </h2>
      <div class="text section__desc pb-0 prices">
        {!! $data['text'] !!}
        <div class="prices__models">
          @foreach($data['options'] as $item)
            <div class="prices__model accordion">
              <div class="accordion__header">
                <div>
                  <span class="title title--small is-bold is-secondary">
                    {{ $item['prefix'] }}
                  </span>
                  <h3 class="title title--smedium">
                    {{ $item['title'] }}
                  </h3>
                </div>
                <i class="fas fa-sort-up accordion__arrow"></i>
              </div>
              <div class="accordion__content">
                <div class="accordion__text">
                  {!! $item['text'] !!}
                  <a class="link link--arrows" href="{{ $item['link']['url'] }}">
                    {{ $item['link']['title'] }}
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        {{--  <div class="columns">
          <div>
            <span class="title title--small is-bold is-secondary pb">Model godzinowy</span>
            <h3 class="title title--smedium pb-2">
              Rozliczenie w oparciu o kartę pracy
            </h3>
            <p>
              Godzinowy model współpracy stosowany jest najczęściej w sytuacji kiedy
              firma nie chce wiązać się żadnymi długoterminowymi umowami oraz
              ceni sobie elastyczność. Wówczas Klient i doradca podpisują umowę o
              współpracy, w której m.in. ustalają cel, zakres usług doradczych oraz
              harmonogram.  Podstawę do zapłaty  stanowi karta pracy doradcy, którą
              akceptuje Klient.
            </p>
            <p>
              Taka forma współpracy najczęściej wynika z konieczności rozwiązania
              problemów z kategorii „na wczoraj”, czyli jest najpowszechniejsza w
              sytuacjach gdy czas jest kluczowym czynnikiem.
            </p>
            <p>
              Koszt współpracy jest kalkulowany na podstawie zrealizowanej liczby godzin doradczych, zaakceptowanych przez Klienta.
            </p>
            <p>
              <strong>
                Koszt 1 godziny doradczej  wynosi 350 PLN  NETTO +VAT.
              </strong>
            </p>
            <p>
              Indywidualna wycena jest wstępnie szacowana i przedstawiana Klientowi po omówieniu celu, zakresu i harmonogramu prac.
            </p>
            <a class="link link--arrows" href="#">
              Szczegóły oferty
            </a>
          </div>
          <div>
            <span class="title title--small is-bold is-secondary pb">Model pakietowy</span>
            <h3 class="title title--smedium pb-2">
              Rozliczenie miesięczne
            </h3>
            <p>
              Pakietowy model współpracy jest najczęściej stosowany przez przedsiębiorców, mikro, małe i średnie firmy, które potrzebują długofalowego doradztwa biznesowego najczęściej wynikającego z konieczności zaplanowania rozwoju, przeprowadzenia transformacji lub usprawnienia pojedynczych procesów. Model ten jest często stosowany w celu „poukładania lub usprawnienia biznesu”, czyli  zaplanowania i przeprowadzenia działań ukierunkowanych na poprawienie pozycji konkurencyjnej firmy.
            </p>
            <p>
              Pakiet to odpowiedź na potrzeby firm, które są zainteresowane dłuższą współpracą z doradcą biznesowym (min. 3 miesiące z możliwością bezterminowego lub terminowego jej przedłużenia). 
            </p>
            <p>
              Koszt współpracy jest kalkulowany na podstawie zrealizowanej liczby godzin doradczych, zaakceptowanych przez Klienta. Klient jest zobowiązany jednak do całkowitego wykorzystania dostępnej w danym miesiącu liczby godzin określonych w pakiecie.
            </p>
            <p>
              <strong>
                Koszt 1 godziny doradczej  wynosi  250 PLN  NETTO +VAT.
              </strong>
            </p>
            <a class="link link--arrows" href="#">
              Szczegóły oferty
            </a>
          </div>
        </div>  --}}
        <div class="prices__table">
          @include("components.prices-table")
        </div>
        <div class="prices__list">
          @include("components.prices-list")
        </div>
        {!! $data['info'] !!}
      </div>
    </div>
  </div>
</section>