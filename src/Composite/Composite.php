<?php


namespace Composite;


use Visitor\VisitorInterface;

class Composite implements ComponentInterface
{
    private array $composites = [];

    public function add(ComponentInterface $composite)
    {
        $this->composites[] = $composite;
    }

    public function remove(ComponentInterface $composite)
    {
        $this->composites = array_filter($this->composites, function($a) use($composite) {
            return $a !== $composite;
        });
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function getChildren(): array
    {
        return $this->composites;
    }

    public function getStringView(int $whitespace = 0): string
    {
        $string = str_repeat(" ", $whitespace)."Composite (\n";
        foreach ($this->composites as $composite) {
            $string .= $composite->getStringView($whitespace + 4);
        }
        $string .= str_repeat(" ", $whitespace).")\n";

        return $string;
    }

    public function getSum(): int
    {
        $sum = 3;
        foreach ($this->composites as $composite) {
            $sum += $composite->getSum();
        }

        return $sum;
    }

    /**
     * For Visitor pattern
     */
    public function accept(VisitorInterface $visitor)
    {
        return $visitor->visitComposite($this);

    }

    public function featureComposite(): string
    {
        return 'Composite';
    }
}
