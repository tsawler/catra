<table class="table">
    <thead>
        <tr class="danger">
            <th>{!! Lang::get('provinces.' . $province->province) !!} {!! $province->year !!}</th>
            <th>
                <select id="yearchange" class="form-control" style="max-width: 200px;">
                    <option <?php if ($year == 2015) { echo "selected "; } ?> value=2015>2015</option>
                    <option <?php if ($year == 2014) { echo "selected "; } ?> value=2014>2014</option>
                    <option <?php if ($year == 2013) { echo "selected "; } ?> value=2013>2013</option>
                    <option <?php if ($year == 2012) { echo "selected "; } ?> value=2012>2012</option>
                    <option <?php if ($year == 2011) { echo "selected "; } ?> value=2011>2011</option>
                    <option <?php if ($year == 2010) { echo "selected "; } ?> value=2010>2010</option>
                </select>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2"><img src="/img/logos/{!! $image !!}" class="img img-responsive"></td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.data') !!}</td>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.tonnes') !!}</td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.collected') !!}</td>
            <td>{!! $province->collected !!}</td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.recycled') !!}
                <br><small>{!! \Illuminate\Support\Facades\Lang::get('common.tire_derived_product') !!}</small></td>
            <td>{!! $province->recycled !!}</td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.energy_recovery') !!}
                <br><small>{!! \Illuminate\Support\Facades\Lang::get('common.tire_derived_fuel') !!}</small></td>
            <td>{!! $province->energy_recovery !!}</td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.diversion_rate') !!}
                <br><small>{!! \Illuminate\Support\Facades\Lang::get('common.formula') !!}</small></td>
            <td>{!! $province->diversion_rate !!}</td>
        </tr>
        <tr>
            <td>{!! \Illuminate\Support\Facades\Lang::get('common.five_year_avg') !!}</td>
            <td>{!! $province->five_year_average !!}</td>
        </tr>

    </tbody>
</table>

<script>
    $("#yearchange").change(function () {
        $.ajax({
            url: '/province',
            type: 'get',
            data: 'province=' + $("#current_province").val() + "&year=" + $("#yearchange").val(),
            dataType: 'html',
            success: function (theresult) {
                $("#region").html(theresult);
                return false;
            },
            error: function () {
                alert('error');
            }
        });
    });
</script>