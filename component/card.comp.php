<?php

class Card
{
    public static function display($type = '', $data = array())
    {
        implode(',', $data);

        if (!is_array($data)){
            return;
        }

        switch ($type) {
            case 'committeeMembers':
                return self::committeeCard($data);
        }
    }

    private static function committeeCard($member)
    {
        // Default image if not provided
        $imgPath = $member['image'] ?? 'genericPlaceholder.jpg';

        return '
        <div class="col mb-4">
            <div class="text-center">
                <img class="rounded mb-3 fit-cover" width="150" height="150" src="' . htmlspecialchars($imgPath) . '" alt="' . htmlspecialchars($member['name']) . ' - ' . htmlspecialchars($member['role']) . '">
                <h5 class="fw-bold mb-0">' . htmlspecialchars($member['name']) . '</h5>
                <p class="text-muted mb-2">' . htmlspecialchars($member['role']) . '</p>
            </div>
        </div>
        ';
    }
}
