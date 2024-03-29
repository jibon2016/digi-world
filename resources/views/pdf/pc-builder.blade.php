
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Print - PC Builder - Digi-World</title>
    <style type="text/css">
        *,body{margin:0;}
        .wrapper,img{max-width:100%}
        *{padding:0}
        img{height:auto}
        .wrapper{margin:0 auto; padding: 20px;}
        .top-area{display:flex;justify-content:center;align-items:center;margin:20px 0}
        .logo{margin-right:20px;
            font-family: 'Koulen', sans-serif;
            letter-spacing: 4px;
        }
        .logo a {
            text-decoration: none;
            font-weight: bold;
            color: #000;
            font-size: 30px;
        }
        .company-info h1{color:#0bc1e9}
        .address{border-top:2px solid #0bc1e9;margin-top:4px;line-height:24px}
        table{width:100%;max-width:99%;border-collapse:collapse}
        table>tbody>tr>td{padding:12px;border-right:1px solid #333}
        table>tbody>tr>td:last-child{border:0}
        .component-info{background:#0bc1e9;color:#fff;border:1px solid #0bc1e9}
        tr.details{border:1px solid #333}
        .total-amount .amount-label{text-align:right}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="top-area">
        <div class="logo"><a href="/">Digi  World</a></div>
        <div class="company-info">
            <h1>Digi-World Ltd </h1>
            <div class="address">
                <p class="web">https://www.digiworldltd.com/pc-builder</p>
            </div>
        </div>
    </div>

    <div class="all-printed-component">
        <table>
            <tr class="component-info">
                <td class="component-name"><b>Component</b></td>
                <td class="product-name"><b>Product Name</b></td>
                <td class="price"><b>Price</b></td>
            </tr>
            <tr class="details">
                <td class="component">CPU</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['processor']) {{ Cache::get('builder-prod')['processor']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['processor']) <div class="price"> {{ Cache::get('builder-prod')['processor']->regular_price }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">CPU Cooler</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['cpu_cooler']) {{ Cache::get('builder-prod')['cpu_cooler']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['cpu_cooler'] ) <div class="price"> {{ Cache::get('builder-prod')['cpu_cooler']->regular_price }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Motherboard</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['motherboard']) {{ Cache::get('builder-prod')['motherboard']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['motherboard']) <div class="price"> {{ Cache::get('builder-prod')['motherboard']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">RAM</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['ram']) {{ Cache::get('builder-prod')['ram']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['ram']) <div class="price"> {{ Cache::get('builder-prod')['ram']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Storage</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['storage']) {{ Cache::get('builder-prod')['storage']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['storage']) <div class="price"> {{ Cache::get('builder-prod')['storage']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">RAM - 2</td>
                <td class="name"></td>
                <td class="price"></td>
            </tr>

            <tr class="details">
                <td class="component">Storage  - 2</td>
                <td class="name"></td>
                <td class="price"></td>
            </tr>

            <tr class="details">
                <td class="component">Graphics Card</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['graphics_card']) {{ Cache::get('builder-prod')['graphics_card']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['graphics_card']) <div class="price"> {{ Cache::get('builder-prod')['graphics_card']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Power Supply</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['power_supply']) {{ Cache::get('builder-prod')['power_supply']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['storage']) <div class="price"> {{ Cache::get('builder-prod')['storage']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Casing</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['casing']) {{ Cache::get('builder-prod')['casing']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['casing']) <div class="price"> {{ Cache::get('builder-prod')['casing']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Casing Cooler</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['casing_cooler']) {{ Cache::get('builder-prod')['casing_cooler']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['casing_cooler']) <div class="price"> {{ Cache::get('builder-prod')['casing_cooler']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Monitor</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['monitor']) {{ Cache::get('builder-prod')['monitor']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['monitor']) <div class="price"> {{ Cache::get('builder-prod')['monitor']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Keyboard</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['keyboard']) {{ Cache::get('builder-prod')['keyboard']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['keyboard']) <div class="price"> {{ Cache::get('builder-prod')['keyboard']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Mouse</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['mouse']) {{ Cache::get('builder-prod')['mouse']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['mouse']) <div class="price"> {{ Cache::get('builder-prod')['mouse']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Anti Virus</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['anti_virus']) {{ Cache::get('builder-prod')['anti_virus']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['anti_virus']) <div class="price"> {{ Cache::get('builder-prod')['anti_virus']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">Headphone</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['headphone']) {{ Cache::get('builder-prod')['headphone']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['headphone']) <div class="price"> {{ Cache::get('builder-prod')['headphone']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>

            <tr class="details">
                <td class="component">UPS</td>
                <td class="name">@if(Cache::has('builder-prod') && Cache::get('builder-prod')['ups']) {{ Cache::get('builder-prod')['ups']->name }} @else  @endif</td>
                <td class="price">
                    @if(Cache::has('builder-prod') && Cache::get('builder-prod')['ups']) <div class="price"> {{ Cache::get('builder-prod')['ups']?->regular_price  }}৳</div> @else  @endif
                </td>
            </tr>
        </table>
    </div>
</div>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>
