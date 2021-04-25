@extends('layouts.admin')
@section('content')
@can('event_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("create") }}">
            Performed New Test
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
    All Tests Performed Today
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                     
                        <th>
                        Catagory
                        </th>
                        <th>
                        Test Name
                        </th>
                        <th>
                        Patient Name
                        </th>
                        <th>
                        Test Fee
                            <!-- {{ trans('cruds.event.fields.start_time') }} -->
                        </th>
                        <th>
                        Normal Range
                        </th>
                        <th>
                        Start Time

                        </th>
                        <th>
                        Test Status
                    </th>
                        
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $key => $event)
                        <tr data-entry-id="{{ $event->id }}">
                            <td>

                            </td>
                         
                            <td>
                                {{ $event->availableTest->catagory->name  ?? '' }}
                            </td>
                            <td>
                                {{ $event->availableTest->name ?? '' }}
                            </td>
                            <td>
                                {{ $event->user->name ?? '' }}
                            </td>
                            <td>
                                {{ $event->availableTest->testFee ?? '' }}
                            </td>
                            <td>
                                {{ $event->availableTest->initialNormalValue ?? '' }}{{ $event->availableTest->units ?? '' }}- {{ $event->availableTest->finalNormalValue ?? '' }}{{ $event->availableTest->units ?? '' }}

                            </td>
                            <td>
                                {{ $event->start_time ?? '' }}
                            </td>
                            <td>
                            @if ($event->state =='Progressing')
                            <button class="btn btn-xs btn-info">{{ $event->state ?? '' }}</button>
                               @elseif ($event->state =='Varified')
                               <button class="btn btn-xs btn-primary">{{ $event->state ?? '' }}</button>
                          
                               @elseif ($event->state =='Not Recived')
                               <button class="btn btn-xs  btn-warning">{{ $event->state ?? '' }}</button>
                               @elseif ($event->state =='Cancelled')
                               <button class="btn btn-xs btn-danger">{{ $event->state ?? '' }}</button>
                             @else
                             I don't have any records!
                                 @endif
                            </td>
                            <td>
                                @can('event_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('test-performed-show', $event->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('event_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('test-performed-edit', $event->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('event_delete')
                                    <form  method="POST" action="{{ route("performed-test-delete", [$event->id]) }}" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"  style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan 

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('event_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.events.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Event:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection