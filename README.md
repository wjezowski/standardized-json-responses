# StandardizedJsonResponse

**StandardizedJsonResponse** provides always the same structure of json data.
It is designed to make backend (API) - frontend communication always the same.
Using **StandardizedJsonResponse** in every project endpoint ensures that each response will return the same data format.  
Regardless of the programmer.

## Introduction

The main job of this library is to make every response the same format.

In addition, this library provides classes with the basic http codes such as
- 200 = JsonResponseOk
- 400 = JsonResponseBadRequest
- 401 = JsonResponseUnauthorized
- 403 = JsonResponseForbidden
- 404 = JsonResponseNotFound
- 500 = JsonResponseInternalServerError

If you want to return other http code, just create new instance of StandardizedJsonResponse with http code you want.

## Recommended in your project

Having this library in your composer.json won't magically make every response formatted the same if **StandardizedJsonResponse** library classes are not used.

Make sure your every API controller in your project HAVE TO return exactly
`\wjezowski\Library\StandardizedJsonResponses\Response\StandardizedJsonResponse`.

## About

Copyright &copy; 2023-2023 [Wojciech Jeżowski](https://github.com/wjezowski)

## License

Licensed under the [ISC License](https://opensource.org/license/isc-license-txt/).

Copyright (c) 2023-2023 Wojciech Jeżowski <dirkuu@gmail.com>

Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.

THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS.
IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
