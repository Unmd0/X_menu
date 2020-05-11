# X_menu
Show All records of Menu with sub menu using Query builder
# Config
Add **xmenu.php.blade** file into the '**Views**' folder of your laravel.
include **xmenu** on your blade view

    @include('Address.to.xmenu')
**Example:**

    @include('shop.master.layouts.menu.xmenu')

Then call **'X_menu**' function like this

    @php
    xmenu(First Parent,'Category Table','Column's of Category name','Column's of Category id');
    @endphp
**Example:**

    @php
    xmenu( 0 , 'category' , 'name' , 'parentID' ) ;
    @endphp
