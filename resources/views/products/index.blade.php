@extends('../layout/dashboard_layout')


@section('title', 'Products')

@section('pgname','Products')
@section('pgname1','Products')

@section('pgsection')
<section class="section">
    <div class="row">
        <div class="card">
          <div class="card-body">
            <div class="mt-3 d-flex justify-content-between align-items-center">
              <div class="col-10">
                <h5 class="card-title">View Products</h5>
              </div>
              <div class="col-2">
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">New Product</a>
              </div>
            </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Brand</th>
                      <th>Price</th>
                      <th>Stock Quantity</th>
                      <th>Supplier</th>
                      <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>RGB Mouse</td>
                    <td>Mouse</td>
                    <td>Dell</td>
                    <td>350</td>
                    <td>20</td>
                    <td>Dell Exlisive store</td>
                    <td>
                      <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                      <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Wireless Keyboard</td>
                    <td>Keyboard</td>
                    <td>Logitech</td>
                    <td>1200</td>
                    <td>15</td>
                    <td>Logitech Official Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Gaming Mouse</td>
                    <td>Mouse</td>
                    <td>Razer</td>
                    <td>2500</td>
                    <td>10</td>
                    <td>Razer Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mechanical Keyboard</td>
                    <td>Keyboard</td>
                    <td>Corsair</td>
                    <td>3000</td>
                    <td>8</td>
                    <td>Corsair Official Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bluetooth Headphones</td>
                    <td>Headphones</td>
                    <td>Sony</td>
                    <td>4500</td>
                    <td>12</td>
                    <td>Sony Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>USB-C Hub</td>
                    <td>Accessory</td>
                    <td>Anker</td>
                    <td>1500</td>
                    <td>25</td>
                    <td>Anker Official Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>External SSD</td>
                    <td>Storage</td>
                    <td>Samsung</td>
                    <td>5000</td>
                    <td>5</td>
                    <td>Samsung Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Wireless Mouse</td>
                    <td>Mouse</td>
                    <td>Microsoft</td>
                    <td>800</td>
                    <td>30</td>
                    <td>Microsoft Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>4K Monitor</td>
                    <td>Monitor</td>
                    <td>LG</td>
                    <td>25000</td>
                    <td>7</td>
                    <td>LG Official Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Gaming Chair</td>
                    <td>Furniture</td>
                    <td>DXRacer</td>
                    <td>15000</td>
                    <td>3</td>
                    <td>DXRacer Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Laptop Stand</td>
                    <td>Accessory</td>
                    <td>Rain Design</td>
                    <td>2000</td>
                    <td>20</td>
                    <td>Rain Design Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Webcam</td>
                    <td>Accessory</td>
                    <td>Logitech</td>
                    <td>3500</td>
                    <td>10</td>
                    <td>Logitech Official Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Smart Speaker</td>
                    <td>Speaker</td>
                    <td>Amazon</td>
                    <td>5000</td>
                    <td>15</td>
                    <td>Amazon Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Wireless Earbuds</td>
                    <td>Headphones</td>
                    <td>Apple</td>
                    <td>12000</td>
                    <td>8</td>
                    <td>Apple Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Graphic Tablet</td>
                    <td>Accessory</td>
                    <td>Wacom</td>
                    <td>10000</td>
                    <td>6</td>
                    <td>Wacom Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Portable Charger</td>
                    <td>Accessory</td>
                    <td>Xiaomi</td>
                    <td>1500</td>
                    <td>25</td>
                    <td>Xiaomi Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Smartwatch</td>
                    <td>Wearable</td>
                    <td>Samsung</td>
                    <td>18000</td>
                    <td>5</td>
                    <td>Samsung Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Printer</td>
                    <td>Printer</td>
                    <td>HP</td>
                    <td>7000</td>
                    <td>10</td>
                    <td>HP Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>External Hard Drive</td>
                    <td>Storage</td>
                    <td>Seagate</td>
                    <td>4000</td>
                    <td>12</td>
                    <td>Seagate Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Gaming Headset</td>
                    <td>Headphones</td>
                    <td>SteelSeries</td>
                    <td>6000</td>
                    <td>7</td>
                    <td>SteelSeries Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>USB Flash Drive</td>
                    <td>Storage</td>
                    <td>SanDisk</td>
                    <td>800</td>
                    <td>50</td>
                    <td>SanDisk Store</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button>
                        <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </daaaaiv>
          </div>
        </div>
    </div>
  </section>

  
@endsection