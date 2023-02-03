  <!-- Modal -->
  <div class="modal fade" id="add_currency" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.add_currency') }}" method="post">
        @csrf
        <div id="add_currency_form"></div>
      </form>
  </div>
   <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
   <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
   <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
   <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

  <script src='{{ asset('react_components/CoinList.jsx') }}' type="text/babel"></script>
