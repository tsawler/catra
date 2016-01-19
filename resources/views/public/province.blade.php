<table class="table">
    <thead>
        <tr class="danger">
            <th>{!! Lang::get('provinces.' . $province->province) !!} {!! $province->year !!} Data</th>
            <th>
                <select id="yearchange" class="form-control" style="max-width: 200px;">
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
            <td>Data</td>
            <td>Tonnes (1 tonne = 2,204 lbs)</td>
        </tr>
        <tr>
            <td>Collected</td>
            <td>{!! $province->collected !!}</td>
        </tr>
        <tr>
            <td>Recycled<br><small>(Tire Derived Product)</small></td>
            <td>{!! $province->recycled !!}</td>
        </tr>
        <tr>
            <td>Energy Recovery<br><small>(Tire Derived Fuel)</small></td>
            <td>{!! $province->energy_recovery !!}</td>
        </tr>
        <tr>
            <td>Diversion Rate<br><small>(TDB + TDF/Collected)</small></td>
            <td>{!! $province->diversion_rate !!}</td>
        </tr>
        <tr>
            <td>Five Year Average</td>
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