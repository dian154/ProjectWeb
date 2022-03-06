<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
<form action="" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">

<div class="px-4 py-1 text-white font-light tracking-wider bg-green-400 rounded" >
        <button>
        <a href="{{route('detailbarang')}}">
            <i class="fa fa-arrow-left"></i> Kembali
        </a>
        </button>
    </div> 
<div class="row">
<table class="min-w-full bg-white">
<thead class="bg-green-600 text-black">
<tr id= "main_heading">
<td width="2%">No</td>
<td width="10%">Gambar</td>
<td width="33%">Item</td>
<td width="17%">Harga</td>
<td width="8%">Qty</td>
<td width="20%">Jumlah</td>
<td width="10%">Hapus</td>
</tr>
</thead>
<tbody class="text-gray-700">
<tr>
<td>1</td>
<td><img class="img-responsive" src="https://images.k24klik.com/product/large/apotek_online_k24klik_20200908101228359225_BETADINE-ANTISEPTIC-60-ML.jpg"/></td>
<td>Betadin</td>
<td>Rp.25.000,-</td>
<td><input type="text" class="form-control input-sm" name="" value="" /></td>
<td>Rp.25.000,-</td>
<td><a href="" class="px-2 py-2 text-white font-light tracking-wider bg-red-400 rounded"><i class="glyphicon glyphicon-remove"></i> X</a></td>
</tr>
<tr>
<td colspan="3"><b>Order Total: Rp 25.000 </b></td>
<td colspan="4" align="right">
<a data-toggle="modal" data-target="#myModal"  class ='px-2 py-2 text-white font-light tracking-wider bg-red-400 rounded' rel="noopener noreferrer">Kosongkan Cart</a>
<a href="" class='px-2 py-2 text-white font-light tracking-wider bg-yellow-400 rounded'  type="submit">Update Cart</a>
<a href="{{route('cekout')}}"  class ='px-2 py-2 text-white font-light tracking-wider bg-green-400 rounded'>Check Out</a>
</tr>
</tbody>
</table>
</div>

</form>



 
</x-admin-layout>