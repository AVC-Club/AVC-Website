<?php

class Card
{
    public static function display($type = '', $data = array())
    {
        implode(',', $data);

        if (!is_array($data)) {
            return;
        }

        switch ($type) {
            case 'committeeMembers':
                return self::committeeCard($data);

            case 'fixtures':
                return self::fixtureCard($data);

            case 'sessionCards':
                return self::sessionCard($data);
        }
    }

    private static function committeeCard($member)
    {
        // Default image if not provided
        $imgPath = $member['image'] ?? '/images/generic-placeholder_user.jpg';

        return '
        <div class="col mb-4">
            <div class="text-center">
                <img class="rounded mb-3 fit-cover" width="150" height="150" src="' . htmlspecialchars($imgPath) . '" alt="' . htmlspecialchars($member['name']) . ' - ' . htmlspecialchars($member['role']) . '">
                <h5 class="text-white fw-bold mb-0">' . htmlspecialchars($member['name']) . '</h5>
                <p class="text-muted mb-2">' . htmlspecialchars($member['role']) . '</p>
            </div>
        </div>
        ';
    }

    private static function fixtureCard($data)
    {
        if (!is_array($data)) {
            return;
        }

        $navTabs = '';
        $tabContent = '';
        $firstActive = true;

        foreach ($data as $index => $tab) {
            $id = 'tab-' . ($index + 1);
            $activeClass = $firstActive ? 'active' : '';
            $ariaSelected = $firstActive ? 'true' : 'false';

            // Tabs
            $navTabs .= '
                <li class="nav-item">
                    <a class="nav-link ' . $activeClass . '" id="' . $id . '-tab" role="tab" aria-controls="' . $id . '" aria-selected="' . $ariaSelected . '" href="#' . $id . '" data-bs-toggle="tab">
                        ' . htmlspecialchars($tab['title']) . '
                    </a>
                </li>
            ';

            // Tab Content with Match Template
            $tabContent .= '
                <div id="' . $id . '" class="tab-pane fade show ' . $activeClass . '" role="tabpanel" aria-labelledby="' . $id . '-tab">
                    <h4 class="text-center text-white"><strong>' . htmlspecialchars($tab['header']) . '</strong></h4>
                    <div class="col-md-8 col-xl-6 col-xxl-6 offset-xxl-10 d-xxl-flex mx-auto justify-content-xxl-center p-4">
                        <div class="d-flex align-items-center align-items-md-start align-items-xl-center">
                            <h4 class="text-white">
                                <strong>' . htmlspecialchars($tab['team1']) . '</strong><br>
                                <img src="' . htmlspecialchars($tab['team1_logo']) . '" style="width: 100px;" width="100" height="100">
                            </h4>
                            <p class="d-flex justify-content-center justify-content-xxl-center" style="font-size: 5vw;padding: 3px;width: 100%;">' . htmlspecialchars($tab['score']) . '</p>
                            <h4 class="text-white">
                                <strong>' . htmlspecialchars($tab['team2']) . '</strong><br>
                                <img src="' . htmlspecialchars($tab['team2_logo']) . '" style="width: 100px;" width="100" height="100">
                            </h4>
                        </div>
                    </div>
                    <p class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none" style="color: rgb(239,0,0);margin: 2px;">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.05025 4.05025C7.78392 1.31658 12.2161 1.31658 14.9497 4.05025C17.6834 6.78392 17.6834 11.2161 14.9497 13.9497L10 18.8995L5.05025 13.9497C2.31658 11.2161 2.31658 6.78392 5.05025 4.05025ZM10 11C11.1046 11 12 10.1046 12 9C12 7.89543 11.1046 7 10 7C8.89543 7 8 7.89543 8 9C8 10.1046 8.89543 11 10 11Z" fill="currentColor"></path>
                        </svg>' . htmlspecialchars($tab['venue']) . '<br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20" fill="none" style="margin: 2px;">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18ZM11 6C11 5.44772 10.5523 5 10 5C9.44771 5 9 5.44772 9 6V10C9 10.2652 9.10536 10.5196 9.29289 10.7071L12.1213 13.5355C12.5118 13.9261 13.145 13.9261 13.5355 13.5355C13.9261 13.145 13.9261 12.5118 13.5355 12.1213L11 9.58579V6Z" fill="currentColor"></path>
                        </svg>' . htmlspecialchars($tab['time']) . '<br><br>
                        <button class="btn btn-primary" type="button">Come support us!</button>
                    </p>
                </div>
            ';

            $firstActive = false;
        }

        return '
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">' . $navTabs . '</ul>
            </div>
            <div class="card-body">
                <div id="nav-tabContent" class="tab-content">' . $tabContent . '</div>
            </div>
        </div>';
    }

    private static function sessionCard($data)
    {
        if (!is_array($data)) {
            return;
        }

        $output = '';

        foreach ($data as $index => $session) {
            $imageOrderClass = $index % 2 !== 0 ? 'order-md-last' : '';

            $output .= '
            <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div class="col ' . $imageOrderClass . ' mb-5">
                    <img class="rounded img-fluid shadow" alt="' . htmlspecialchars($session['alt']) . '" src="' . htmlspecialchars($session['image']) . '">
                </div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div>
                        <h5 class="fw-bold">' . htmlspecialchars($session['title']) . '</h5>
                        <p class="text-muted mb-4">
                            ' . nl2br(htmlspecialchars($session['description'])) . '<br>
                            ⌛ <strong>' . htmlspecialchars($session['time']) . '</strong><br>
                            💰 <strong>' . htmlspecialchars($session['price']) . '</strong><br>
                            📍 <strong>' . htmlspecialchars($session['location']) . '</strong><br>
                            ' . htmlspecialchars($session['address']) . '
                        </p>
                        <button class="btn btn-primary shadow" type="button">Maps</button>
                    </div>
                </div>
            </div>';
        }

        return $output;
    }
}
