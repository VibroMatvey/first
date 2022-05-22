@extends('layout.main')
@section('search')
    <div class="container" style="max-width: 500px;">
        <h5 class="text-center">Найти клиента</h5>
        <div class="text-center" style="margin-top: 50px;">
            <input type="text" class="form-control typeahead" placeholder="Поиск...">
        </div>
    </div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script type="text/javascript">
    const path = "{{ route('query') }}";
    $('input.typeahead').typeahead({
        source: function (query, process) {
            return $.get(path, {query: query}, function (data) {
                return process(data);
            });
        }
    })
</script>
@endsection