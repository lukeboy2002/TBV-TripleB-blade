<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'invited_date',
        'invitation_token',
    ];

    protected function casts(): array
    {
        return [
            'invited_date' => 'datetime',
        ];
    }

    /**
     * Generates a new invitation token.
     *
     * @return bool|string
     */
    public function generateInvitationToken()
    {
        $this->invitation_token = substr(md5(rand(0, 9).$this->email.time()), 0, 32);
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return urldecode(route('accept-invitation.create').'?invitation_token='.$this->invitation_token);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
