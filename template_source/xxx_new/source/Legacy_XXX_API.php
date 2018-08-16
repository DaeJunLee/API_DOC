<script>
/**
 * @apiDefine UserNotFoundError
 */

/**
 * @api {post} /oauth/token 로그인
 * @apiVersion 0.1.8
 * @apiName 로그인
 *
 * @apiPermission none
 * @apiGroup Legacy
 * @apiDescription 사용자를 확인 한후 api 연결을 위한 token을 내려 받기 위한 API
 *
 * @apiHeader {String} Authorization Basic ‘encoded “smart:secret” to base64’
 *                                   ex) Basic c21hcnQ6c2VjcmV0
 * @apiHeader {String} Content-Type  application/x-www-form-urlencoded; charset=utf-8
 *
 * @apiParam {String} username         사용자명 : ex) dev.smartinfini@gmail.com
 * @apiParam {String} password         비밀번호
 * @apiParam {String} grant_type       인증타입 : password(id/pw 기반)
 *
 * @apiSuccess {String} access_token 접근 토근
 * @apiSuccess {String} token_type   토근형태
 * @apiSuccess {String} scope        범위
 *
 * @apiError {String} custom_error   에러
 * @apiError {String} custom_error_description  에러내용
 *
 * @apiSuccessExample Success-Response: 200
 *     HTTP/1.1 200 OK
 *     {
 *          "access_token": "06e78994-9ac4-4498-9d37-79589329d9a5",
 *          "token_type":  "bearer",
 *          "scope": "read write"
 *     }
 * @apiErrorExample Error-Response: 400
 *     HTTP/1.1 400 Bad Reauest
 *     {
 *          "custom_error": "my custom exception",
 *          "custom_error_description": "Bad credentials"
 *     }
 * @apiErrorExample Error-Response: 500
 *     HTTP/1.1 500 Internal Server Error
 *
 * @apiUse UserNotFoundError
 */
/**
 * @api {post} /oauth/token 로그인
 * @apiVersion 0.1.9
 * @apiName 로그인
 *
 * @apiPermission none
 * @apiGroup Legacy
 * @apiDescription 사용자를 확인 한후 api 연결을 위한 token을 내려 받기 위한 API
 *
 * @apiHeader {String} Authorization Basic ‘encoded “smart:secret” to base64’
 *                                   ex) Basic c21hcnQ6c2VjcmV0
 * @apiHeader {String} Content-Type  application/x-www-form-urlencoded; charset=utf-8
 *
 * @apiParam {String} username         사용자명 : ex) dev.smartinfini@gmail.com
 * @apiParam {String} password         비밀번호
 *
 * @apiSuccess {String} access_token 접근 토근
 * @apiSuccess {String} token_type   토근형태
 *
 * @apiError {String} custom_error   에러
 * @apiError {String} custom_error_description  에러내용
 *
 * @apiSuccessExample Success-Response: 200
 *     HTTP/1.1 200 OK
 *     {
 *          "access_token": "06e78994-9ac4-4498-9d37-79589329d9a5",
 *          "token_type":  "bearer",
 *          "scope": "read write"
 *     }
 * @apiErrorExample Error-Response: 400
 *     HTTP/1.1 400 Bad Reauest
 *     {
 *          "custom_error": "my custom exception",
 *          "custom_error_description": "Bad credentials"
 *     }
 * @apiErrorExample Error-Response: 500
 *     HTTP/1.1 500 Internal Server Error
 *
 * @apiUse UserNotFoundError
 */
/**
 * @api {post} /oauth/token 로그인
 * @apiVersion 0.2.0
 * @apiName 로그인
 *
 * @apiPermission none
 * @apiGroup Legacy
 * @apiDescription 사용자를 확인 한후 api 연결을 위한 token을 내려 받기 위한 API
 *
 * @apiHeader {String} Authorization Basic ‘encoded “smart:secret” to base64’
 *                                   ex) Basic c21hcnQ6c2VjcmV0
 * @apiHeader {String} Content-Type  application/x-www-form-urlencoded; charset=utf-8
 *
 * @apiParam {String} username         사용자명 : ex) dev.smartinfini@gmail.com
 *
 * @apiSuccess {String} access_token 접근 토근
 * @apiSuccess {String} token_type   토근형태
 * @apiSuccess {String} htel        전화번호
 * @apiSuccess {String} htel3s      전화번호 마지막 네자리
 * @apiSuccess {String} fcmtoken    권한레벨(ROLE_USER: Default)
 * @apiSuccess {String} auth_level  FCM token
 *
 * @apiError {String} custom_error   에러
 * @apiError {String} custom_error_description  에러내용
 *
 * @apiSuccessExample Success-Response: 300
 *     HTTP/1.1 200 OK
 *     {
 *          "access_token": "06e78994-9ac4-4498-9d37-79589329d9a5",
 *          "token_type":  "bearer",
 *          "temp": "---------------"
 *          "scope": "read write"
 *     }
 * @apiErrorExample Error-Response: 404
 *     HTTP/1.1 404 Not Found
 * 
 * @apiErrorExample Error-Response: 500
 *     HTTP/1.1 500 Internal Server Error
 *
 * @apiUse UserNotFoundError
 */
function oauthToken() {
    //1.로그인
}

/**
 * @api {post} /oauth/logout 로그아웃
 * @apiVersion 0.1.8
 * @apiName 로그아웃
 *
 * @apiPermission oauth
 * @apiGroup Legacy
 * @apiDescription 로그아웃
 *
 * @apiHeader {String} Authorization bearer 06e78994-9ac4-4498-9d37-79589329d9a5
 * @apiHeader {String} Content-Type  application/json;
 *
 * @apiSuccess {String} result (success : 성공, failed : 실패)
 *
 * @apiError {String} error   에러
 *
 * @apiSuccessExample Success-Response: 200
 *     HTTP/1.1 200 OK
 *     {
 *          "result": "success"
 *     }
 * @apiErrorExample Error-Response: 401
 *     HTTP/1.1 401 Unauthorized
 *     {
 *          "error": "invalid_token"
 *     }
 * @apiErrorExample Error-Response: 500
 *     HTTP/1.1 500 Internal Server Error
 *
 * @apiUse UserNotFoundError
 */
function oauthLogout() {
    //2.로그아웃
}

/**
 * @api {post} /api/get/account 회원정보
 * @apiVersion 0.1.8
 * @apiName 회원정보
 *
 * @apiPermission oauth
 * @apiGroup Account
 * @apiDescription xxx의 회원정보
 *
 * @apiHeader {String} Authorization token_type + access_token
 *                          ex) bearer 1a26b8a3-924a-469e-97f2-a8123815a7ed
 * @apiHeader {String} Content-type application/json
 * @apiHeaderExample {json} Header-Example:
 *     {
 *        authorization: bearer 06e78994-9ac4-4498-9d37-79589329d9a5,
 *        content-type: application/json
 *     }
 * @apiSuccess {String} hID         Unique ID
 * @apiSuccess {String} id          아이디(Email)
 * @apiSuccess {String} passwd      비밀번호
 * @apiSuccess {String} name        이름
 * @apiSuccess {String} email       이메일
 * @apiSuccess {String} htel        전화번호
 * @apiSuccess {String} htel3s      전화번호 마지막 네자리
 * @apiSuccess {String} fcmtoken    권한레벨(ROLE_USER: Default)
 * @apiSuccess {String} auth_level  FCM token
 * @apiSuccess {String} os          OS type
 *
 * @apiError {String} error
 * @apiError {String} error_description
 *
 * @apiSuccessExample Success-Response: 200
 *      HTTP/1.1 200 OK
 *      {
 *        "hID": "C0CF48ACFB73760",
 *        "id": "dejavudev@gmail.com",
 *        "passwd": "*77B48D6366D102139D3719F48B811EAE123B2CA5",
 *        "name": "",
 *        "email": "dejavudev@gmail.com",
 *        "htel": "010-6651-8462",
 *        "htel3": "8462",
 *        "fcmtoken": "cnz_cT0kup0:APA91bFyp9IjmHX9BZKwpnvLwPddI9as2peuicfkdjk0N76z8Rm1Awnio9ezwqaWHMNgY-cn5K1jCC8WGrA3AXmyu29Flzdd2hTIgt_cl-YdkFidPv3ROlMmVejvLklIZpn-z609oB0M",
 *        "auth_level": "ROLE_USER",
 *        "os": "ios"
 *     }
 * @apiErrorExample Error-Response: 401
 *     HTTP/1.1 401
 *     {
 *        "error": "invalid_token",
 *        "error_description": "Invalid access token: 06e78994-9ac4-4498-9d37-79589329d9a51"
 *     }
 * @apiErrorExample Error-Response: 500
 *     HTTP/1.1 500 Internal Server Error
 *
 * @apiUse UserNotFoundError
 */
function apiGetAccount() {
    //3.회원정보
}

</script>
