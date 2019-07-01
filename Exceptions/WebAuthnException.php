<?php

namespace SAFETECHio\FIDO2\Exceptions;

class WebAuthnException extends FIDO2Exception
{
    const RP_DISPLAY_NAME_NOT_SET = 1;

    const RP_ID_NOT_SET = 2;

    const RP_ID_NOT_VALID_URI = 3;

    const RP_ORIGIN_NOT_VALID_URL = 4;

    const ID_MISMATCH = 5;

    const HASH_MISMATCH = 6;

    const AUTHENTICATOR_DATA_TOO_SHORT = 7;

    const AUTHENTICATOR_CREDENTIAL_DATA_MISSING = 8;

    const AUTHENTICATOR_CREDENTIAL_FLAG_MISSING = 9;

    const AUTHENTICATOR_EXTENSION_DATA_MISSING = 10;

    const AUTHENTICATOR_REMAINING_BYTES = 11;

    const CLIENT_CEREMONY_TYPE_MISMATCH = 12;

    const CLIENT_CHALLENGE_MISMATCH = 13;

    const CLIENT_ORIGIN_MISMATCH = 14;

    const CLIENT_TOKEN_BINDING_MISSING_STATUS = 15;

    const CLIENT_TOKEN_BINDING_UNKNOWN_STATUS = 16;

    const AUTHENTICATOR_RP_ID_HASH_MISMATCH = 17;

    const AUTHENTICATOR_USER_PRESENT_FLAG_MISSING = 18;

    const AUTHENTICATOR_USER_VERIFIED_FLAG_MISSING = 19;

    const ATTESTATION_FORMAT_UNKNOWN_TYPE = 20;

    const ATTESTATION_FORMAT_NONE_STATEMENT_SET = 21;

    const ATTESTATION_STATEMENT_ALG_NOT_SET = 22;

    const ATTESTATION_STATEMENT_SIG_NOT_SET = 23;

    const ATTESTATION_STATEMENT_X5C_NOT_SET = 24;

    const ATTESTATION_STATEMENT_X5C_PARSE_FAILED = 25;

    const ATTESTATION_STATEMENT_X5C_INVALID_TIME = 26;

    const ATTESTATION_VERIFY_FAIL = 27;

    const ATTESTATION_CERTIFICATE_INVALID = 28;

    const ATTESTATION_TYPE_NOT_SUPPORTED = 29;

    const ATTESTATION_UNKNOWN_PUBLIC_KEY_TYPE = 30;

    const ATTESTATION_ALGORITHM_MISMATCH = 31;

    const ATTESTATION_SIGNATURE_INVALID = 32;

    const ATTESTATION_UNSUPPORTED_ALGORITHM = 33;

    const USER_NO_CREDENTIALS_FOUND = 34;
}