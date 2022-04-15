<?php 
$data = file_get_contents('https://hiring.bajajfinservhealth.in/api/renderMe');
$data = json_decode($data);
?>

<table class="table table-bordered mb-0 no-footer " id="currencies-table">
<thead>
    <tr>
        <th>login</th>
        <th>id</th>
        <th>node_id</th>
        <th>avatar_url</th>
        <th>gravatar_id</th>
        <th>html_url</th>
        <th>repos_url</th>
        <th>received_events_url</th>
    </tr>
    </thead>
<tbody>
@foreach(@$data as $key => $val)
<tr>
    <td>
{{$val->login}}
    </td>
    <td>
    {{$val->id}}
    </td>
    <td>
    {{$val->node_id}}
    </td>
    <td>
    {{$val->avatar_url}}
    </td>
    <td>
    {{$val->url->html_url}}
    </td>
    <td>
    {{$val->url->repos_url}}
    </td>
    <td>
    {{$val->url->received_events_url}}
    </td>
    <td>
    {{$val->type}}
    </td>
</tr>
@endforeach

</tbody>
</table>