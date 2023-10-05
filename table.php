<?php
require __DIR__ . "/data.php"; ?>
<table>
    <tr>
        <th> Team </th>
        <th> Leauge </th>
        <th> City </th>
        <th> Last Champions </th>
        <th> Nickname </th>
        <th> Webpage </th>
    </tr>
    <?php foreach ($teams as $key => $team) : ?> <tr>
            <td> <?php echo $key; ?> </td>
            <td> <?php echo $team["league"]; ?> </td>
            <td> <?php echo $team["last-time-champions"]; ?>
                <?php
                if ($team["last-time-champions"] === null) {
                    echo "n/a";
                } ?> </td>
            <td> <?php echo $team["city"]; ?> </td>
            <td> <?php if (isset($team["nickname"]) == "false") {
                        echo $team["nickname"];
                    } else {
                        echo "n/a";
                    } ?> </td>
            <td> <?php echo $team["url"]; ?> </td>
        <?php endforeach; ?>
        </td>
        </tr>
</table>