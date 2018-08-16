# API
API DOCS를 만들기 위하여 [APIDOC](apidocjs.com)를 활용하였습니다. SWAGGER등 여러가지가 있지만, 가장 간편하게 사용할수 있는것으로 판단 되어 우리는 APIDOC을 사용합니다.


## HOW TO INSTALL
```
npm install express -g
npm install apidoc -g
```

## HOW TO RUN
```
sudo ./node_modules/apidoc/bin/apidoc -i source/ -o api_xxx_legacy/
```
source/ api 소스 위치
api_xxx_legacy/ api문서 만들 위치

## HOW TO USE

폴더 및 소스 설명
- 'api_xxx'로 시작하는 폴더는 실제 API화 되어진 소스 단이 위치 합니다. 실제 APIDOCS화 된 소스 위치 입니다.

```
api_xxx 의 'xxx'는 서비스 명입니다.

```

- 'XXX_xxx'로 시작하는 폴더는 실제 API화 되어진 소스 단이 위치 합니다. 실제 APIDOCS화 된 소스 위치 입니다.
```
XXX_xxx 의 'xxx'는 서비스 명입니다.

```

- server_api.js : NodeJs 로 서비스 시작을 하게 되면 모든 API를 볼수 있습니다.
```
XXX_xxx 의 'xxx'는 서비스 명입니다.

```

## CURRENT API 

### api_XXX_legacy
XXX legacy api입니다. Legacy api는 부족한 부분이 있어, 샘플 형태로만 아주 간략하게 제공합니다.
자세한건 [XXX LEGACY]()를 참고하기 바랍니다.

---

### api_XXX_new
시스템 개편 및 APIDOCS를 도입하였습니다.

---