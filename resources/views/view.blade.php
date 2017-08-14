<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<?php echo View::make('navbar') ?>
<h1>Address Book - Edit</h1>
<table>

    @foreach($address as $field)
        <tr>
            <td>

            <td>

            </td>
            <td>

            </td>
            <td>
                {{$address1->addrs2 }}
            </td>
            <td>
                {{$address1->tel }}
            </td>
        </tr>
    @endforeach
</table>