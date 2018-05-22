<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "addDonor",
        "loginDonor",
        "addReplies",
        "getFormRepliesOfUser",
        "getDonorInfo",
        "updateReplies",
        "updateDonor",
        "addRejectedRequest",
        "addAcceptedRequest",
        "forgotPassword",
        "getAcceptedRequests",
        "getRejectedRequests"
    ];
}
