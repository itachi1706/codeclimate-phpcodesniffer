<?php

namespace Sniffs;

class Sniffs
{
    const DEFAULT_POINTS = 70000;
    const INVALID_SNIFFS = array(
        "Internal.NoCodeFound",
        "Internal.Tokenizer.Exception"
    );

    public static $sniffs = array(
        "Generic.ControlStructures.InlineControlStructure.NotAllowed" => 60000,
        "Generic.Files.LineEndings.InvalidEOLChar" => 60000,
        "Generic.Files.LineLength.TooLong" => 60000,
        "Generic.Functions.FunctionCallArgumentSpacing.NoSpaceAfterComma" => 50000,
        "Generic.WhiteSpace.DisallowTabIndent.TabsUsed" => 60000,
        "Generic.WhiteSpace.ScopeIndent.Incorrect" => 50000,
        "Generic.WhiteSpace.ScopeIndent.IncorrectExact" => 50000,
        "PEAR.Functions.ValidDefaultValue.NotAtEnd" => 60000,
        "PSR1.Classes.ClassDeclaration.MissingNamespace" => 600000,
        "PSR1.Classes.ClassDeclaration.MultipleClasses" => 400000,
        "PSR1.Files.SideEffects.FoundWithSymbols" => 500000,
        "PSR2.ControlStructures.ControlStructureSpacing.SpacingAfterOpenBrace" => 50000,
        "PSR2.ControlStructures.ElseIfDeclaration.NotAllowed" => 50000,
        "PSR2.ControlStructures.SwitchDeclaration.TerminatingComment" => 50000,
        "PSR2.Files.ClosingTag.NotAllowed" => 50000,
        "PSR2.Files.EndFileNewline.NoneFound" => 50000,
        "PSR2.Methods.FunctionCallSignature.CloseBracketLine" => 50000,
        "PSR2.Methods.FunctionCallSignature.ContentAfterOpenBracket" => 50000,
        "PSR2.Methods.FunctionCallSignature.Indent" => 50000,
        "PSR2.Methods.FunctionCallSignature.MultipleArguments" => 70000,
        "PSR2.Methods.FunctionCallSignature.SpaceAfterOpenBracket" => 50000,
        "PSR2.Methods.FunctionCallSignature.SpaceBeforeCloseBracket" => 50000,
        "PSR2.Methods.FunctionCallSignature.SpaceBeforeOpenBracket" => 50000,
        "Squiz.Classes.ValidClassName.NotCamelCaps" => 50000,
        "Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace" => 50000,
        "Squiz.ControlStructures.ControlSignature.SpaceAfterCloseBrace" => 50000,
        "Squiz.ControlStructures.ControlSignature.SpaceAfterCloseParenthesis" => 50000,
        "Squiz.ControlStructures.ControlSignature.SpaceAfterKeyword" => 50000,
        "Squiz.ControlStructures.ControlSignature.SpaceBeforeSemicolon" => 50000,
        "Squiz.ControlStructures.ForLoopDeclaration.NoSpaceAfterFirst" => 50000,
        "Squiz.ControlStructures.ForLoopDeclaration.NoSpaceAfterSecond" => 50000,
        "Squiz.Functions.FunctionDeclarationArgumentSpacing.NoSpaceBeforeArg" => 50000,
        "Squiz.Functions.MultiLineFunctionDeclaration.BraceOnSameLine" => 50000,
        "Squiz.Functions.MultiLineFunctionDeclaration.ContentAfterBrace" => 50000,
        "Squiz.WhiteSpace.ScopeClosingBrace.ContentBefore" => 50000,
        "Squiz.WhiteSpace.ScopeClosingBrace.Indent" => 50000,
        "Squiz.WhiteSpace.SuperfluousWhitespace.EndLine" => 50000,
        "PHPCompatibility.PHP.DeprecatedFunctions" => 50000,
        "PHPCompatibility.PHP.DeprecatedIniDirectives" => 50000,
        "PHPCompatibility.PHP.DeprecatedNewReference" => 50000,
        "PHPCompatibility.PHP.ForbiddenBreakContinueVariableArguments" => 50000,
        "PHPCompatibility.PHP.ForbiddenCallTimePassByReference" => 50000,
        "PHPCompatibility.PHP.ForbiddenNames" => 50000,
        "PHPCompatibility.PHP.LongArrays" => 50000,
        "PHPCompatibility.PHP.NewClasses" => 50000,
        "PHPCompatibility.PHP.NewFunctions" => 50000,
        "PHPCompatibility.PHP.NewIniDirectives" => 50000,
        "PHPCompatibility.PHP.NewKeywords" => 50000,
        "PHPCompatibility.PHP.NewLanguageConstructs" => 50000,
        "PHPCompatibility.PHP.NonStaticMagicMethods" => 50000,
        "PHPCompatibility.PHP.ParameterShadowSuperGlobals" => 50000,
        "PHPCompatibility.PHP.PregReplaceEModifier" => 50000,
        "PHPCompatibility.PHP.RemovedExtensions" => 50000,
        "PHPCompatibility.PHP.RemovedHashAlgorithms" => 50000,
        "Generic.Classes.DuplicateClassName" => 50000,
        "Generic.CodeAnalysis.EmptyStatement" => 50000,
        "Generic.CodeAnalysis.UnnecessaryFinalModifier" => 50000,
        "Generic.CodeAnalysis.UselessOverridingMethod" => 50000,
        "Generic.ControlStructures.InlineControlStructure" => 50000,
        "Generic.Files.LineEndings" => 50000,
        "Generic.Functions.CallTimePassByReference" => 50000,
        "Generic.Functions.OpeningFunctionBraceKernighanRitchie" => 50000,
        "Generic.NamingConventions.ConstructorName" => 50000,
        "Generic.NamingConventions.UpperCaseConstantName" => 50000,
        "Generic.PHP.DeprecatedFunctions" => 50000,
        "Generic.PHP.DisallowShortOpenTag" => 50000,
        "Generic.PHP.LowerCaseConstant" => 50000,
        "Generic.WhiteSpace.DisallowTabIndent" => 50000,
        "Generic.WhiteSpace.ScopeIndent" => 50000,
        "Zend.Files.ClosingTag" => 50000,
        "Squiz.Classes.DuplicateProperty" => 50000,
        "Squiz.Classes.LowercaseClassKeywords" => 50000,
        "Squiz.Classes.SelfMemberReference" => 50000,
        "Squiz.Commenting.DocCommentAlignment" => 50000,
        "Squiz.Commenting.EmptyCatchComment" => 50000,
        "Squiz.ControlStructures.ElseIfDeclaration" => 50000,
        "Squiz.ControlStructures.ForEachLoopDeclaration" => 50000,
        "Squiz.ControlStructures.ForLoopDeclaration" => 50000,
        "Squiz.ControlStructures.LowercaseDeclaration" => 50000,
        "Squiz.Functions.LowercaseFunctionKeywords" => 50000,
        "Squiz.PHP.CommentedOutCode" => 50000,
        "Squiz.PHP.LowercasePHPFunctions" => 50000,
        "Squiz.Scope.MethodScope" => 50000,
        "Squiz.Scope.StaticThisUsage" => 50000,
        "Squiz.WhiteSpace.ObjectOperatorSpacing" => 50000,
        "Squiz.WhiteSpace.OperatorSpacing" => 50000,
        "Squiz.WhiteSpace.ScopeClosingBrace" => 50000,
        "Squiz.WhiteSpace.ScopeKeywordSpacing" => 50000,
        "Squiz.WhiteSpace.SemicolonSpacing" => 50000,
        "Squiz.WhiteSpace.SuperfluousWhitespace" => 50000,
        "moodle.Commenting.InlineComment" => 50000,
        "moodle.ControlStructures.ControlSignature" => 50000,
        "moodle.Files.BoilerplateComment" => 50000,
        "moodle.Files.LineLength" => 50000,
        "moodle.NamingConventions.ValidFunctionName" => 50000,
        "moodle.NamingConventions.ValidVariableName" => 50000,
        "moodle.PHP.ForbiddenFunctions" => 50000,
        "moodle.PHP.ForbiddenNamesAsInvokedFunctions" => 50000,
        "moodle.PHP.ForbiddenTokens" => 50000,
        "moodle.PHP.IncludingFile" => 50000,
        "moodle.PHP.MemberVarScope" => 50000,
        "moodle.Strings.ForbiddenStrings" => 50000,
        "moodle.WhiteSpace.SpaceAfterComma" => 50000,
        "moodle.WhiteSpace.WhiteSpaceInStrings" => 50000,
    );

    public static function pointsFor($issue)
    {
        $sniffName = $issue["source"];
        $points = self::$sniffs[$sniffName];

        if ($points) {
            return $points;
        } else {
            return $issue["severity"] * self::DEFAULT_POINTS;
        }
    }

    public static function isValidIssue($issue) {
        $sniffName = $issue["source"];

        if (in_array($sniffName, self::INVALID_SNIFFS)) {
            return false;
        } else {
            return true;
        }
    }
}
