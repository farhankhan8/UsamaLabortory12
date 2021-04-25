@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
    Catagory Deatials
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('catagory-list') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                        Catagory
                        </th>
                        <td>
                            {{ $rooms->name }}
                        </td>
                    </tr>
                    <tr>
                      
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('catagory-list') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection