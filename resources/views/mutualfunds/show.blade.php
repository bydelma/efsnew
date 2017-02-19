@extends('app')
@section('content')
    <h1>Mutual Fund</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Category</td>
                <td><?php echo ($mutualfund['category']); ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo ($mutualfund['description']); ?></td>
            </tr>
            <tr>
                <td>Acquired Value</td>
                <td><?php echo ($mutualfund['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Acquisition Date </td>
                <td><?php echo ($mutualfund['acquisition_date']); ?></td>
            </tr>
            <tr>
                <td>Recent Value</td>
                <td><?php echo ($mutualfund['recent_value']); ?></td>
            </tr>
             <tr>
                <td>Recent Date</td>
                <td><?php echo ($mutualfund['recent_date']); ?></td>
            </tr>

            </tbody>
        </table>
    </div>
@stop
