@foreach($orders as $order)
  <tr>
    <td data-label="No Order">
      {{$order->no_order}}
    </td>
    <td data-label="Email">
      {{$order->email}}
    </td>
    <td data-label="Package">
      {{$order->package}}
    </td> 
    <td data-label="Total">
      Rp. <?php echo number_format($order->total) ?>
    </td>
    <td data-label="Discount">
      Rp. <?php echo number_format($order->discount) ?>
    </td>
    <td data-label="Date">
      {{$order->created_at}}
    </td>
    <td data-label="Bukti Bayar" align="center">
      @if($order->bukti_bayar=='' or $order->bukti_bayar==null)
        -
      @else
        <a class="popup-newWindow" href="<?php echo  Storage::disk('public')->url('app/'.$order->bukti_bayar) ?>">
          View
        </a>
      @endif
    </td>
    <td data-label="Keterangan">
      @if($order->keterangan=='' or $order->keterangan==null)
        -
      @else
        $order->keterangan
      @endif
    </td>
    <td data-label="Status">
      @if($order->status==0 or $order->status==1)
        <button type="button" class="btn btn-primary btn-confirm" data-toggle="modal" data-target="#confirm-order" data-id="{{$order->id}}">
          Confirm
        </button>
      @else 
        <span style="color: green">
          <b>Confirmed</b>
        </span>
      @endif
    </td>
  </tr>
@endforeach