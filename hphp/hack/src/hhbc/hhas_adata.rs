// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.
use runtime::TypedValue;

pub const ARRAY_PREFIX: &str = "a";
pub const VARRAY_PREFIX: &str = "y";
pub const VEC_PREFIX: &str = "v";
pub const DICT_PREFIX: &str = "D";
pub const DARRAY_PREFIX: &str = "Y";
pub const KEYSET_PREFIX: &str = "k";

pub struct HhasAdata {
    pub id: String,
    pub value: TypedValue,
}
